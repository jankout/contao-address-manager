<?php
namespace JanKout\ContaoAddressManager\Model;

use Contao\Model\Collection;
use Contao\Database;
use Contao\Date;
use Contao\FilesModel;
use Contao\Model;
use Contao\NewsModel;
use Contao\System;

class AddressModel extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected static $strTable = 'tl_addresses';
}
