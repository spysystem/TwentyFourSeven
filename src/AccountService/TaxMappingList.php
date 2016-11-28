<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class TaxMappingList
 *
 * @package TwentyFourSeven\AccountService
 */
class TaxMappingList
{

    /**
     * @var string $GroupId
     */
    protected $GroupId = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $IsTemplate
     */
    protected $IsTemplate = null;

    /**
     * @var ArrayOfTaxMappingElements $elementList
     */
    protected $elementList = null;

    /**
     * @param string $GroupId
     * @param boolean $IsTemplate
     */
    public function __construct($GroupId, $IsTemplate)
    {
      $this->GroupId = $GroupId;
      $this->IsTemplate = $IsTemplate;
    }

    /**
     * @return string
     */
    public function getGroupId()
    {
      return $this->GroupId;
    }

    /**
     * @param string $GroupId
     * @return \TwentyFourSeven\AccountService\TaxMappingList
     */
    public function setGroupId($GroupId)
    {
      $this->GroupId = $GroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \TwentyFourSeven\AccountService\TaxMappingList
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \TwentyFourSeven\AccountService\TaxMappingList
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTemplate()
    {
      return $this->IsTemplate;
    }

    /**
     * @param boolean $IsTemplate
     * @return \TwentyFourSeven\AccountService\TaxMappingList
     */
    public function setIsTemplate($IsTemplate)
    {
      $this->IsTemplate = $IsTemplate;
      return $this;
    }

    /**
     * @return ArrayOfTaxMappingElements
     */
    public function getElementList()
    {
      return $this->elementList;
    }

    /**
     * @param ArrayOfTaxMappingElements $elementList
     * @return \TwentyFourSeven\AccountService\TaxMappingList
     */
    public function setElementList($elementList)
    {
      $this->elementList = $elementList;
      return $this;
    }

}
