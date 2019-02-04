<?php

declare(strict_types=1);

namespace Scherzetto\DB\DBAL\Connection;

use Scherzetto\DB\DBAL\FetchMode;

interface ConnectionInterface
{
    public function prepare($prepareString);

    public function query($query, $mode = FetchMode::DEFAULT, $arg3 = null, array $ctorargs = []);

    public function exec($statement);

    public function lastInsertId($name = null);

    public function beginTransaction();

    public function commit();

    public function rollBack();
}
