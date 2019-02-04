<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 27/01/19
 * Time: 14:26.
 */

namespace Scherzetto\DB\Test\DBAL\Configurator;

use Scherzetto\DB\DBAL\Configurator\YamlConfigurator;
use Scherzetto\TestCase\TestCase;

class YamlConfiguratorTest extends TestCase
{
    /** @var YamlConfigurator */
    private $configurator;

    public function setUp()
    {
        $this->configurator = new YamlConfigurator('./Scherzetto/DB/Test/fixtures/config.yml');
    }

    public function testGetParams()
    {
        $result = $this->configurator->getParams();
        $this->assertIsArray($result);
        $this->assertArrayHasKey(0, $result);
        $this->assertArrayHasKey('dbname', $result[0]);
    }
}
