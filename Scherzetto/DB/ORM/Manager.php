<?php

declare(strict_types=1);

namespace Scherzetto\DB\ORM;

use Scherzetto\DB\DBAL\Configurator\DotenvConfigurator;
use Scherzetto\DB\DBAL\Connection;
use Scherzetto\DB\DBAL\Driver\PDODriver;

class Manager
{
    /**
     * @var Connection
     */
    private $conn;

    public function __construct(Connection $conn = null)
    {
        $this->conn = $conn ?? new Connection(new DotenvConfigurator(), new PDODriver());
    }
}
