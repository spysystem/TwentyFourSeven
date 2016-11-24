<?php

namespace TwentyFourSeven\ClientService;

class GetDepartmentListResponse
{

    /**
     * @var ArrayOfDepartment $GetDepartmentListResult
     */
    protected $GetDepartmentListResult = null;

    /**
     * @param ArrayOfDepartment $GetDepartmentListResult
     */
    public function __construct($GetDepartmentListResult)
    {
      $this->GetDepartmentListResult = $GetDepartmentListResult;
    }

    /**
     * @return ArrayOfDepartment
     */
    public function getGetDepartmentListResult()
    {
      return $this->GetDepartmentListResult;
    }

    /**
     * @param ArrayOfDepartment $GetDepartmentListResult
     * @return \TwentyFourSeven\ClientService\GetDepartmentListResponse
     */
    public function setGetDepartmentListResult($GetDepartmentListResult)
    {
      $this->GetDepartmentListResult = $GetDepartmentListResult;
      return $this;
    }

}
