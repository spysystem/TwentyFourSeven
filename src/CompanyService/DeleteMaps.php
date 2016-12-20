<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class DeleteMaps
 *
 * @package TwentyFourSeven\CompanyService
 */
class DeleteMaps
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
     * @return \TwentyFourSeven\CompanyService\DeleteMaps
     */
    public function setMaps($maps)
    {
      $this->maps = $maps;
      return $this;
    }

}
