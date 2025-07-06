<?php

/*
 * Addresses bundle for Contao Open Source CMS.
 *
 * @copyright  Copyright (c) 2025, Jan Kout
 * @author     Jan Kout <https://jankout.eu>
 * @license    MIT
 */

use Contao\Config;
use Contao\DataContainer;
use Contao\DC_Table;
use Contao\System;

$GLOBALS['TL_DCA']['tl_addresses'] = [
    'config' => [
        'label' => $GLOBALS['TL_LANG']['tl_addresses'],
        'dataContainer' => DC_Table::class,
        'enableVersioning' => true,
        'sql' => [
            'keys' => [
                'id' => 'primary',
                'pid' => 'index',
                'alias' => 'index',
            ],
        ],
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
        'operations' => array(
            'edit',
            'copy',
            'cut',
            'delete',
            'toggle' => array(
                'href' => 'act=toggle&amp;field=published',
                'icon' => 'visible.svg',
                'primary' => true,
                'showInHeader' => true
            ),
            'feature' => array(
                'href' => 'act=toggle&amp;field=featured',
                'icon' => 'featured.svg',
                'primary' => true,
            ),
            'show'
        ),
    ],
    'palettes' => [
        'default' => 'title,street,postal,city,country,published',
    ],
    'fields' => [
        'id' => ['sql' => 'int(10) unsigned NOT NULL auto_increment'],
        'tstamp' => ['sql' => "int(10) unsigned NOT NULL default '0'"],
        'pid' => [
            'sql' => ['type' => 'integer', 'unsigned' => true, 'default' => 0],
        ],
        'sorting' => [
            'sql' => ['type' => 'integer', 'unsigned' => true, 'default' => 0],
        ],
        'title' => ['label' => &$GLOBALS['TL_LANG']['tl_addresses']['title'], 'inputType' => 'text', 'eval' => ['mandatory' => true, 'maxlength' => 255], 'sql' => "varchar(255) NOT NULL default ''"],
        'street' => ['label' => &$GLOBALS['TL_LANG']['tl_addresses']['street'], 'inputType' => 'text', 'eval' => ['maxlength' => 255], 'sql' => "varchar(255) NOT NULL default ''"],
        'postal' => ['label' => &$GLOBALS['TL_LANG']['tl_addresses']['postal'], 'inputType' => 'text', 'eval' => ['maxlength' => 32], 'sql' => "varchar(32) NOT NULL default ''"],
        'city' => ['label' => &$GLOBALS['TL_LANG']['tl_addresses']['city'], 'inputType' => 'text', 'eval' => ['maxlength' => 255], 'sql' => "varchar(255) NOT NULL default ''"],
        'country' => ['label' => &$GLOBALS['TL_LANG']['tl_addresses']['country'], 'inputType' => 'text', 'eval' => ['maxlength' => 255], 'sql' => "varchar(255) NOT NULL default ''"],
        'published' => [
            'label' => &$GLOBALS['TL_LANG']['tl_addresses']['published'],
            'filter' => true,
            'toggle' => true,
            'inputType' => 'checkbox',
            'sql' => ['type' => 'boolean', 'default' => 0],
        ],
    ]
];
