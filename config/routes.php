<?php

use craft\helpers\UrlHelper;

// Haal het huidige pad op (bijv. 'contact' of 'admin/entries')
$currentPath = Craft::$app->getRequest()->getPathInfo();
// Haal de 'cpTrigger' op uit de config (standaard 'admin')
$cpTrigger = Craft::$app->getConfig()->getGeneral()->cpTrigger;

// Controleer of we NIET in het admin-paneel zitten en het geen console verzoek is
if (!str_starts_with($currentPath, $cpTrigger) && !Craft::$app->getRequest()->getIsConsoleRequest()) {
    Craft::$app->getResponse()->redirect('https://www.facebook.com/tarmacmeerhout', 301)->send();
    exit();
}

return [
    // Je kunt dit leeg laten als alles naar Facebook gaat
];