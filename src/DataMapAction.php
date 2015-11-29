<?php

namespace Thruster\Action\DataMapperActions;

use Thruster\Component\Actions\Action\BaseAction;

/**
 * Class DataMapAction
 *
 * @package Thruster\Action\DataMapperActions
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class DataMapAction extends BaseAction
{
    /**
     * DataMapAction constructor.
     *
     * @param string $mapperName
     * @param mixed  $input
     */
    public function __construct(string $mapperName, $input)
    {
        parent::__construct($mapperName, $input);
    }

    /**
     * @inheritDoc
     */
    public function getName() : string
    {
        return 'thruster_data_mapper_map';
    }
}
