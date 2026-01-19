<?php
namespace modules;

use Craft;
use yii\base\Event;
use yii\base\Module as BaseModule;
use modules\jobs\GoogleSheetsJob; // Vergeet deze import niet!

class Module extends BaseModule
{
    public function init()
    {
        parent::init();
        
        Craft::setAlias('@modules', __DIR__);
        
        Event::on(
            \craft\mail\Mailer::class,
            \craft\mail\Mailer::EVENT_BEFORE_SEND,
            function(\yii\mail\MailEvent $event) {
                if (isset($_POST['form_id'])) {
                    $to = $event->message->getTo();
                    $userEmail = $_POST['email'] ?? '';
                    
                    if (array_key_exists($userEmail, $to)) {
                        // We roepen de functie aan die de taak in de wachtrij zet
                        $this->queueGoogleSheetsJob();
                    }
                }
            }
        );
    }
    
    protected function queueGoogleSheetsJob()
    {
        // 1. Verzamel de data (dit gaat razendsnel)
        $data = [
            'besteldOp'     => date('d/m') . ' om ' . date('H') . 'u' . date('i'),
            'voornaam'      => $_POST['first_name'] ?? '',
            'naam'          => $_POST['last_name'] ?? '',
            'email'         => $_POST['email'] ?? '',
            'mailVerstuurd' => 'J',
            'tickets'       => $_POST['amount'] ?? '',
        ];
        
        $webhookUrl = 'https://script.google.com/macros/s/AKfycbywjK_VHOcp09tQPiAF2rt0kv5sNL7OcI0Eovjb-XDyCuGvze90RHvT5bVWnngg7akf/exec';

        // 2. In plaats van zelf te posten, maken we een nieuwe Job aan
        // Dit duurt slechts enkele milliseconden
        Craft::$app->getQueue()->push(new GoogleSheetsJob([
            'data' => $data,
            'webhookUrl' => $webhookUrl,
        ]));

        Craft::info('Google Sheets Job toegevoegd aan queue', __METHOD__);
    }
}