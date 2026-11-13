<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless Container Support',
    'description' => 'Extension that adds container Support for Headless extension',
    'category' => 'plugin',
    'author' => 'Fabio Norbutat',
    'author_email' => 'fabio.norbutat@live.de',
    'state' => 'beta',
    'version' => '5.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-14.99.9',
            'container' => '3.0.4-4.99.99',
            'headless' => '1.6.0-5.99.99',
        ]
    ],
];
