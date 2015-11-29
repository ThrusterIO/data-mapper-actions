<?php

namespace Thruster\Action\DataMapperActions;

use Thruster\Component\Actions\ActionExecutorInterface;
use Thruster\Component\DataMapper\DataMappers;

/**
 * Class DataMapActionExecutor
 *
 * @package Thruster\Action\DataMapperActions
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class DataMapActionExecutor implements ActionExecutorInterface
{
    /**
     * @var DataMappers
     */
    protected $dataMappers;

    public function __construct(DataMappers $dataMappers)
    {
        $this->dataMappers = $dataMappers;
    }

    /**
     * @inheritDoc
     */
    public function execute(array $arguments)
    {
        $mapperName = reset($arguments);
        $input = end($arguments);

        return $this->dataMappers->getMapper($mapperName)->map($input);
    }

    /**
     * @inheritDoc
     */
    public static function getSupportedAction() : string
    {
        return 'thruster_data_mapper_map';
    }

}
