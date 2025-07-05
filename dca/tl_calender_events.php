<?php

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['address'] = [
    'label' => ['Adresse', 'Verknüpfte Adresse wählen'],
    'inputType' => 'select',
    'foreignKey' => 'tl_address.title',
    'eval' => ['chosen' => true, 'includeBlankOption' => true],
    'sql' => "int(10) unsigned NOT NULL default '0'"
];

$GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default'] = str_replace('alias;', 'alias,address;', $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default']);
