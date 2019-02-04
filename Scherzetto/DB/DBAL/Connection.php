<?php

declare(strict_types=1);

namespace Scherzetto\DB\DBAL;

use Scherzetto\DB\DBAL\Configurator\ConfiguratorInterface;
use Scherzetto\DB\DBAL\Connection\ConnectionInterface;
use Scherzetto\DB\DBAL\Driver\DriverInterface;

class Connection
{
    /** @var DriverInterface */
    private $driver;

    /** @var ConnectionInterface */
    private $conn;

    /** @var bool */
    private $isConnected = false;

    public function __construct(ConfiguratorInterface $configurator, DriverInterface $driver)
    {
        [$params, $username, $password] = $configurator->getParams();
        $this->driver = $driver;
        $this->conn = $this->driver->connect($params, $username, $password);
        $this->isConnected = true;
    }
}
