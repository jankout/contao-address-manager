<?php

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['address'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['fields']['address'],
    'inputType' => 'select',
    'foreignKey' => 'tl_addresses.title',
    'eval' => ['chosen' => true, 'includeBlankOption' => true],
    'sql' => "int(10) unsigned NOT NULL default '0'"
];

$GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default'] = str_replace('alias;', 'alias,address;', $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default']);
