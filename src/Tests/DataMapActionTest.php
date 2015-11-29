<?php

namespace Thruster\Action\DataMapperActions\Tests;

use Thruster\Action\DataMapperActions\DataMapAction;

/**
 * Class DataMapActionTest
 *
 * @package Thruster\Action\DataMapperActions\Tests
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class DataMapActionTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $executor = $this->getMock('\Thruster\Component\Actions\Executor');

        $action = new DataMapAction('foo', 'bar');
        $this->assertSame(['foo', 'bar'], $action->parseArguments($executor));

        $action = new DataMapAction('foo', 'bar', 'something_else');
        $this->assertSame(['foo', 'bar'], $action->parseArguments($executor));
    }

    public function testName()
    {
        $action = new DataMapAction('foo', 'bar');

        $this->assertSame('thruster_data_mapper_map', $action->getName());
    }
}
