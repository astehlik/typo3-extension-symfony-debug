<?php

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Symfony debug',
    'description' => 'Debug the Symfony container with the debug:container command.',
    'category' => 'misc',
    'version' => '1.0.0',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 0,
    'author' => 'Alexander Stehlik',
    'author_email' => 'alexander.stehlik.deleteme@gmail.com',
    'author_company' => '',
    'constraints' => [
        'depends' => ['typo3' => '12.4.0-12.4.99'],
        'conflicts' => [],
        'suggests' => [],
    ],
];
