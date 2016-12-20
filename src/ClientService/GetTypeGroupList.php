<?php

namespace TwentyFourSeven\ClientService;

/**
 * Class GetTypeGroupList
 *
 * @package TwentyFourSeven\ClientService
 */
class GetTypeGroupList
{

    /**
     * @var TypeGroupModule $module
     */
    protected $module = null;

    /**
     * @param TypeGroupModule $module
     */
    public function __construct($module)
    {
      $this->module = $module;
    }

    /**
     * @return TypeGroupModule
     */
    public function getModule()
    {
      return $this->module;
    }

    /**
     * @param TypeGroupModule $module
     * @return \TwentyFourSeven\ClientService\GetTypeGroupList
     */
    public function setModule($module)
    {
      $this->module = $module;
      return $this;
    }

}
