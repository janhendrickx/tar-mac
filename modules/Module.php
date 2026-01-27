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
                    $voornaam = $_POST['first_name'] ?? '';
                    $achternaam = $_POST['last_name'] ?? '';
                    $amount = $_POST['amount'] ?? '';
                    $volledigeNaam = trim($voornaam . ' ' . $achternaam);
                    
                    // Check of dit de USER email is (voor Google Sheets)
                    if (array_key_exists($userEmail, $to)) {
                        // Verstuur naar Google Sheets
                        $this->sendToGoogleSheetsFast();
                    } else {
                        $ticketWoord = ($amount > 1) ? 'tickets' : 'ticket';
                        $adminSubject = "Bestelling van {$amount} {$ticketWoord} voor Affaire op 28/02 o.n.v. {$volledigeNaam}";
                        $event->message->setSubject($adminSubject);
                        // ADMIN EMAIL: Pas Reply-To aan naar de gebruiker
                        $event->message->setReplyTo([$userEmail => $volledigeNaam]);
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
            $promise = $client->postAsync($webhookUrl, [
                'json' => $data,
                'timeout' => 2,
                'connect_timeout' => 2,
            ]);
            $promise->wait(false);
            
            Craft::info('Google Sheets request afgevuurd.', __METHOD__);
        } catch (\Exception $e) {
            Craft::error('Google Sheets snelle verzending mislukt: ' . $e->getMessage(), __METHOD__);
        }
    }
}