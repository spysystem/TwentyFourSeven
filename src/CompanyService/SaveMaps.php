<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class SaveMaps
 *
 * @package TwentyFourSeven\CompanyService
 */
class SaveMaps
{

    /**
     * @var ArrayOfCompanyMap $maps
     */
    protected $maps = null;

    /**
     * @param ArrayOfCompanyMap $maps
     */
    public function __construct($maps)
    {
      $this->maps = $maps;
    }

    /**
     * @return ArrayOfCompanyMap
     */
    public function getMaps()
    {
      return $this->maps;
    }

    /**
     * @param ArrayOfCompanyMap $maps
     * @return \TwentyFourSeven\CompanyService\SaveMaps
     */
    public function setMaps($maps)
    {
      $this->maps = $maps;
      return $this;
    }

}
