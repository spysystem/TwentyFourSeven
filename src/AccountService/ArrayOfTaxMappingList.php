<?php

namespace TwentyFourSeven\AccountService;

class ArrayOfTaxMappingList implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TaxMappingList[] $TaxMappingList
     */
    protected $TaxMappingList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxMappingList[]
     */
    public function getTaxMappingList()
    {
      return $this->TaxMappingList;
    }

    /**
     * @param TaxMappingList[] $TaxMappingList
     * @return \TwentyFourSeven\AccountService\ArrayOfTaxMappingList
     */
    public function setTaxMappingList(array $TaxMappingList = null)
    {
      $this->TaxMappingList = $TaxMappingList;
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
      return isset($this->TaxMappingList[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TaxMappingList
     */
    public function offsetGet($offset)
    {
      return $this->TaxMappingList[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TaxMappingList $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TaxMappingList[] = $value;
      } else {
        $this->TaxMappingList[$offset] = $value;
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
      unset($this->TaxMappingList[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TaxMappingList Return the current element
     */
    public function current()
    {
      return current($this->TaxMappingList);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TaxMappingList);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TaxMappingList);
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
      reset($this->TaxMappingList);
    }

    /**
     * Countable implementation
     *
     * @return TaxMappingList Return count of elements
     */
    public function count()
    {
      return count($this->TaxMappingList);
    }

}
