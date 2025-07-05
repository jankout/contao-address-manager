<?php

// Register the model (optional)
$GLOBALS['TL_MODELS']['tl_addresses'] = \JanKout\ContaoAddressManager\Model\AddressModel::class;

$GLOBALS['BE_MOD']['content']['addresses'] = [
    'tables' => ['tl_addresses'],
    'icon' => 'assets/icon.svg',
];
