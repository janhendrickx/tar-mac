<?php

use craft\helpers\App;
return [
    'defaultProfile' => 'standard',
    'sitename' => \Craft::$app->getSites()->getCurrentSite()->name,
    'defaultMetaImage' => '/assets/img/logo.png',
    
    'fieldProfiles' => [
        'standard' => [
            'title'       => ['seoTitle', 'title'],
            'description' => ['seoDescription'],
            'image'       => [
                'seoImage', 
                'image', 
                ['transform' => ['width' => 1200, 'height' => 630, 'mode' => 'crop']]
            ],
        ]
    ],
    'applyTerminator' => true,
    'separator' => ' | ',
];