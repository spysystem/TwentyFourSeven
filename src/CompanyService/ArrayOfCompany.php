<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class ArrayOfCompany
 *
 * @package TwentyFourSeven\CompanyService
 */
class ArrayOfCompany implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Company[] $Company
     */
    protected $Company = null;


	/**
	 * ArrayOfCompany constructor.
	 */
	public function __construct()
    {
    
    }

	/**
	 * @return array
	 */
	public function asIndexedArray()
	{
		$arrCompanies	= [];
		foreach ($this as $oCompany)
		{
			$arrCompanies[$oCompany->getType().'::'.$oCompany->getName()]	= $oCompany;
		}

		return $arrCompanies;
	}

    /**
     * @return Company[]
     */
    public function getCompany()
    {
      return $this->Company;
    }

    /**
     * @param Company[] $Company
     * @return \TwentyFourSeven\CompanyService\ArrayOfCompany
     */
    public function setCompany(array $Company = null)
    {
      $this->Company = $Company;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->Company[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Company
     */
    public function offsetGet($offset)
    {
      return $this->Company[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Company $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Company[] = $value;
      } else {
        $this->Company[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Company[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Company Return the current element
     */
    public function current()
    {
      return current($this->Company);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Company);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Company);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->Company);
    }

    /**
     * Countable implementation
     *
     * @return Company Return count of elements
     */
    public function count()
    {
      return count($this->Company);
    }

}
