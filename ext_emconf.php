<?php

/**
 * Extension Manager/Repository config file for ext "bca".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'bca',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'EduardoFrank\\Bca\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Eduardo Frank',
    'author_email' => 'efrank@eduardofrank.co',
    'author_company' => 'Eduardo Frank',
    'version' => '1.0.0',
];
