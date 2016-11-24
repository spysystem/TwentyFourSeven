<?php

namespace TwentyFourSeven\AccountService;

class LogMessage
{

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @param string $message
     */
    public function __construct($message)
    {
      $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \TwentyFourSeven\AccountService\LogMessage
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
