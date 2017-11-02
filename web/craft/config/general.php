<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

  '*' => array(
        'omitScriptNameInUrls' => true
    ),
    //development
    '.dev' => array(
        'cache' => false,
        'devMode' => true,
    ),
    'trj.dev' => array(
        'siteUrl' => 'http://trj.dev',
        'site' => 'trj',
    ),

);
