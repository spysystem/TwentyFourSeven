<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class LinkModel
 *
 * @package TwentyFourSeven\AccountService
 */
class LinkModel
{

    /**
     * @var string $LineId
     */
    protected $LineId = null;

    /**
     * @var string $LinkId
     */
    protected $LinkId = null;


	/**
	 * LinkModel constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLineId()
    {
      return $this->LineId;
    }

    /**
     * @param string $LineId
     * @return \TwentyFourSeven\AccountService\LinkModel
     */
    public function setLineId($LineId)
    {
      $this->LineId = $LineId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkId()
    {
      return $this->LinkId;
    }

    /**
     * @param string $LinkId
     * @return \TwentyFourSeven\AccountService\LinkModel
     */
    public function setLinkId($LinkId)
    {
      $this->LinkId = $LinkId;
      return $this;
    }

}
