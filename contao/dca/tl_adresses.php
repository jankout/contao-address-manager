<?php

$GLOBALS['TL_DCA']['tl_addresses'] = [
    'config' => [
        'dataContainer' => 'Table',
        'sql' => ['keys' => ['id' => 'primary']]
    ],
    'list' => [
        'sorting' => [
            'mode' => 2,
            'fields' => ['title'],
            'flag' => 1,
            'panelLayout' => 'filter;search,limit'
        ],
        'label' => [
            'fields' => ['title', 'city'],
            'format' => '%s (%s)'
        ],
        'operations' => [
            'edit' => ['label' => ['Bearbeiten', 'Adresse bearbeiten'], 'href' => 'act=edit', 'icon' => 'edit.svg'],
            'delete' => ['label' => ['Löschen', 'Adresse löschen'], 'href' => 'act=delete', 'icon' => 'delete.svg', 'attributes' => 'onclick="if(!confirm(\'Wirklich löschen?\'))return false; ContaoBackend.getScrollOffset()"'],
            'show' => ['label' => ['Anzeigen', 'Details anzeigen'], 'href' => 'act=show', 'icon' => 'show.svg'],
        ]
    ],
    'palettes' => [
        'default' => 'title,street,postal,city,country'
    ],
    'fields' => [
        'id' => ['sql' => 'int(10) unsigned NOT NULL auto_increment'],
        'tstamp' => ['sql' => "int(10) unsigned NOT NULL default '0'"],
        'title' => ['label' => ['Name/Bezeichnung', ''], 'inputType' => 'text', 'eval' => ['mandatory' => true, 'maxlength' => 255], 'sql' => "varchar(255) NOT NULL default ''"],
        'street' => ['label' => ['Straße', ''], 'inputType' => 'text', 'eval' => ['maxlength' => 255], 'sql' => "varchar(255) NOT NULL default ''"],
        'postal' => ['label' => ['PLZ', ''], 'inputType' => 'text', 'eval' => ['maxlength' => 32], 'sql' => "varchar(32) NOT NULL default ''"],
        'city' => ['label' => ['Ort', ''], 'inputType' => 'text', 'eval' => ['maxlength' => 255], 'sql' => "varchar(255) NOT NULL default ''"],
        'country' => ['label' => ['Land', ''], 'inputType' => 'text', 'eval' => ['maxlength' => 255], 'sql' => "varchar(255) NOT NULL default ''"],
    ]
];
