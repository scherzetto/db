<?php

declare(strict_types=1);

namespace Scherzetto\DB\DBAL\Driver;

use Scherzetto\DB\DBAL\Connection\ConnectionInterface;

interface DriverInterface
{
    public function connect(array $params, $username, $password): ConnectionInterface;
}
