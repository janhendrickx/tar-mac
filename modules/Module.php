<?php
namespace modules;

use Craft;
use yii\base\Event;
use yii\base\Module as BaseModule;

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
                        $this->sendToGoogleSheetsFast();
                    }
                }
            }
        );
    }
    
    protected function sendToGoogleSheetsFast()
    {
        $data = [
            'besteldOp'     => date('d/m') . ' om ' . date('H') . 'u' . date('i'),
            'voornaam'      => $_POST['first_name'] ?? '',
            'naam'          => $_POST['last_name'] ?? '',
            'email'         => $_POST['email'] ?? '',
            'mailVerstuurd' => 'J',
            'tickets'       => $_POST['amount'] ?? '',
        ];
        
        $webhookUrl = 'https://script.google.com/macros/s/AKfycbywjK_VHOcp09tQPiAF2rt0kv5sNL7OcI0Eovjb-XDyCuGvze90RHvT5bVWnngg7akf/exec';

        $client = Craft::createGuzzleClient();

        try {
            // postAsync stuurt de data direct weg
            $promise = $client->postAsync($webhookUrl, [
                'json' => $data,
                'timeout' => 2, // We wachten max 2 seconden als de verbinding traag is
                'connect_timeout' => 2,
            ]);

            // De 'false' hier is cruciaal: het zegt "ga door met het script, 
            // wacht niet op de volledige afhandeling van het HTTP verzoek"
            $promise->wait(false);
            
            Craft::info('Google Sheets request afgevuurd.', __METHOD__);
        } catch (\Exception $e) {
            Craft::error('Google Sheets snelle verzending mislukt: ' . $e->getMessage(), __METHOD__);
        }
    }
}