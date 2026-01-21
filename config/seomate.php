<?php

use craft\helpers\App;

return [
    'sitename' => \Craft::$app->getSites()->getCurrentSite()->name,
    'defaultMetaImage' => '/assets/img/logo.png',
    
    'fieldMapping' => [
        'title'       => ['seoTitle', 'title'],
        'description' => ['seoDescription', 'summary'],
        // We voegen hier de transform instructies toe
        'image'       => [
            'seoImage', 
            'image', 
            ['transform' => ['width' => 1200, 'height' => 630, 'mode' => 'crop']]
        ],
    ],
    
    'applyTerminator' => true,
    'separator' => ' | ',
];