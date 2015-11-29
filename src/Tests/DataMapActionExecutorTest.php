<?php

namespace Thruster\Action\DataMapperActions\Tests;

use Thruster\Action\DataMapperActions\DataMapActionExecutor;

/**
 * Class DataMapActionExecutorTest
 *
 * @package Thruster\Action\DataMapperActions\Tests
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class DataMapActionExecutorTest extends \PHPUnit_Framework_TestCase
{

    public function testExecute()
    {
        $dataMappers = $this->getMock('\Thruster\Component\DataMapper\DataMappers');

        $dataMapper = $this->getMockBuilder('\Thruster\Component\DataMapper\DataMapper')
            ->disableOriginalConstructor()
            ->getMock();

        $dataMapper->expects($this->once())
            ->method('map')
            ->with('bar')
            ->willReturn('foobar');

        $dataMappers->expects($this->once())
            ->method('getMapper')
            ->with('foo')
            ->willReturn($dataMapper);

        $executor = new DataMapActionExecutor($dataMappers);

        $this->assertSame('foobar', $executor->execute(['foo', 'bar']));
    }

    public function testName()
    {
        $dataMappers = $this->getMock('\Thruster\Component\DataMapper\DataMappers');

        $executor = new DataMapActionExecutor($dataMappers);

        $this->assertSame('thruster_data_mapper_map', $executor->getSupportedAction());
    }
}
