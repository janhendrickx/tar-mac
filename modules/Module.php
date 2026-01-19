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
        
        // Luister naar alle form submissions via Craft's mailer
        Event::on(
            \craft\mail\Mailer::class,
            \craft\mail\Mailer::EVENT_BEFORE_SEND,
            function(\yii\mail\MailEvent $event) {
                // Check of het een Wheelform email is
                if (isset($_POST['form_id'])) {
                    // Haal de ontvanger(s) op
                    $to = $event->message->getTo();
                    $userEmail = $_POST['email'] ?? '';
                    
                    // Alleen versturen als de email naar de gebruiker gaat (niet naar admin)
                    if (array_key_exists($userEmail, $to)) {
                        $this->sendToGoogleSheets();
                    }
                }
            }
        );
    }
    
    protected function sendToGoogleSheets()
    {
        // Haal POST data op
        $firstName = $_POST['first_name'] ?? '';
        $lastName = $_POST['last_name'] ?? '';
        $email = $_POST['email'] ?? '';
        $amount = $_POST['amount'] ?? '';
        // Datum en tijd in gewenst formaat: "28/02 om 12u35"
        $besteldOp = date('d/m') . ' om ' . date('H') . 'u' . date('i');
        
        if (empty($email)) {
            return; // Geen formulier data
        }
        
        // Jouw Google Apps Script URL
        $webhookUrl = 'https://script.google.com/macros/s/AKfycbywjK_VHOcp09tQPiAF2rt0kv5sNL7OcI0Eovjb-XDyCuGvze90RHvT5bVWnngg7akf/exec';
        
        $data = [
            'besteldOp' => $besteldOp,
            'voornaam' => $firstName,
            'naam' => $lastName,
            'email' => $email,
            'mailVerstuurd' => 'J',
            'tickets' => $amount,
        ];
        
        Craft::info('Sending to Google Sheets: ' . json_encode($data), __METHOD__);
        
        $client = Craft::createGuzzleClient();
        try {
            $response = $client->post($webhookUrl, [
                'json' => $data,
                'timeout' => 10
            ]);
            
            Craft::info('Google Sheets response: ' . $response->getBody(), __METHOD__);
            
        } catch (\Exception $e) {
            Craft::error('Google Sheets webhook failed: ' . $e->getMessage(), __METHOD__);
        }
    }
}