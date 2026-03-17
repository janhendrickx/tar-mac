<?php
/**
 * Site URL Rules
 *
 * You can define custom site URL rules here, which Craft will check in addition
 * to routes defined in Settings → Routes.
 *
 * Read about Craft’s routing behavior (and this file’s structure), here:
 * @link https://craftcms.com/docs/5.x/system/routing.html
 */

return [
    // Stuurt alles door, behalve paden die beginnen met 'admin'
    '^(?!admin).*$' => ['redirect' => 'https://www.facebook.com/tarmacmeerhout', 'status' => 301],
];
