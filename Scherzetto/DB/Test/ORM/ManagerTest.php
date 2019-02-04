<?php

declare(strict_types=1);

namespace Scherzetto\DB\Test\ORM;

use Scherzetto\DB\ORM\Manager;
use Scherzetto\Env\EnvVarsSetter;
use Scherzetto\Env\Parser\DotenvParser;
use PHPUnit\Framework\TestCase;

/**
 * @author yourname
 */
class ManagerTest extends TestCase
{
    public function testDummy()
    {
        (new EnvVarsSetter(new DotenvParser()))->loadEnv('./Scherzetto/DB/Test/fixtures/.env');
        $manager = new Manager();
        $this->assertInstanceOf(Manager::class, $manager);
    }
}
