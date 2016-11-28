<?php

namespace TwentyFourSeven\CompanyService;

class APIException
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $StackTrace
     */
    protected $StackTrace = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \TwentyFourSeven\CompanyService\APIException
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \TwentyFourSeven\CompanyService\APIException
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getStackTrace()
    {
      return $this->StackTrace;
    }

    /**
     * @param string $StackTrace
     * @return \TwentyFourSeven\CompanyService\APIException
     */
    public function setStackTrace($StackTrace)
    {
      $this->StackTrace = $StackTrace;
      return $this;
    }

}
