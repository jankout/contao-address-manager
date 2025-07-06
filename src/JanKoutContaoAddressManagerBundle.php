<?php declare(strict_types=1);

namespace JanKout\ContaoAddressManager;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JanKoutContaoAddressManagerBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
