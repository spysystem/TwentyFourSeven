<?php

namespace TwentyFourSeven\AccountService;

class Bundle
{

    /**
     * @var int $YearId
     */
    protected $YearId = null;

    /**
     * @var ArrayOfVoucher $voucherList
     */
    protected $voucherList = null;

    /**
     * @var int $Sort
     */
    protected $Sort = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $BundleDirectAccounting
     */
    protected $BundleDirectAccounting = null;

    /**
     * @param int $YearId
     * @param int $Sort
     * @param boolean $BundleDirectAccounting
     */
    public function __construct($YearId, $Sort, $BundleDirectAccounting)
    {
      $this->YearId = $YearId;
      $this->Sort = $Sort;
      $this->BundleDirectAccounting = $BundleDirectAccounting;
    }

    /**
     * @return int
     */
    public function getYearId()
    {
      return $this->YearId;
    }

    /**
     * @param int $YearId
     * @return \TwentyFourSeven\AccountService\Bundle
     */
    public function setYearId($YearId)
    {
      $this->YearId = $YearId;
      return $this;
    }

    /**
     * @return ArrayOfVoucher
     */
    public function getVoucherList()
    {
      return $this->voucherList;
    }

    /**
     * @param ArrayOfVoucher $voucherList
     * @return \TwentyFourSeven\AccountService\Bundle
     */
    public function setVoucherList($voucherList)
    {
      $this->voucherList = $voucherList;
      return $this;
    }

    /**
     * @return int
     */
    public function getSort()
    {
      return $this->Sort;
    }

    /**
     * @param int $Sort
     * @return \TwentyFourSeven\AccountService\Bundle
     */
    public function setSort($Sort)
    {
      $this->Sort = $Sort;
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
     * @return \TwentyFourSeven\AccountService\Bundle
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBundleDirectAccounting()
    {
      return $this->BundleDirectAccounting;
    }

    /**
     * @param boolean $BundleDirectAccounting
     * @return \TwentyFourSeven\AccountService\Bundle
     */
    public function setBundleDirectAccounting($BundleDirectAccounting)
    {
      $this->BundleDirectAccounting = $BundleDirectAccounting;
      return $this;
    }

}
