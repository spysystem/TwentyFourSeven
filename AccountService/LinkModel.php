<?php

namespace TwentyFourSeven\AccountService;

class LinkModel
{

    /**
     * @var guid $LineId
     */
    protected $LineId = null;

    /**
     * @var guid $LinkId
     */
    protected $LinkId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return guid
     */
    public function getLineId()
    {
      return $this->LineId;
    }

    /**
     * @param guid $LineId
     * @return \TwentyFourSeven\AccountService\LinkModel
     */
    public function setLineId($LineId)
    {
      $this->LineId = $LineId;
      return $this;
    }

    /**
     * @return guid
     */
    public function getLinkId()
    {
      return $this->LinkId;
    }

    /**
     * @param guid $LinkId
     * @return \TwentyFourSeven\AccountService\LinkModel
     */
    public function setLinkId($LinkId)
    {
      $this->LinkId = $LinkId;
      return $this;
    }

}
