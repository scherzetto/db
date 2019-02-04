<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 27/01/19
 * Time: 14:26.
 */

namespace Scherzetto\DB\Test\DBAL\Configurator;

use Scherzetto\DB\DBAL\Configurator\DotenvConfigurator;
use Scherzetto\TestCase\TestCase;

class DotenvConfiguratorTest extends TestCase
{
    /** @var DotenvConfigurator */
    private $configurator;

    public function setUp()
    {
        $this->configurator = new DotenvConfigurator();
    }

    public function testGetParams()
    {
        $result = $this->configurator->getParams();
        $this->assertIsArray($result);
        $this->assertArrayHasKey(0, $result);
        $this->assertArrayHasKey('dbname', $result[0]);
    }
}
