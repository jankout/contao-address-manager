<?php

// Feld hinzufügen
$GLOBALS['TL_DCA']['tl_news']['fields']['address'] = [
    'label' => ['Adresse', 'Verknüpfte Adresse wählen'],
    'inputType' => 'select',
    'foreignKey' => 'tl_addresses.title',
    'eval' => ['chosen' => true, 'includeBlankOption' => true],
    'sql' => "int(10) unsigned NOT NULL default '0'"
];

// In Standard-Palette einfügen
$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace('alias;', 'alias,address;', $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);
