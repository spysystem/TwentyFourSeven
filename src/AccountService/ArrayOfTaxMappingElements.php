<?php

namespace TwentyFourSeven\AccountService;

class ArrayOfTaxMappingElements implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TaxMappingElements[] $TaxMappingElements
     */
    protected $TaxMappingElements = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxMappingElements[]
     */
    public function getTaxMappingElements()
    {
      return $this->TaxMappingElements;
    }

    /**
     * @param TaxMappingElements[] $TaxMappingElements
     * @return \TwentyFourSeven\AccountService\ArrayOfTaxMappingElements
     */
    public function setTaxMappingElements(array $TaxMappingElements = null)
    {
      $this->TaxMappingElements = $TaxMappingElements;
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
      return isset($this->TaxMappingElements[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TaxMappingElements
     */
    public function offsetGet($offset)
    {
      return $this->TaxMappingElements[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TaxMappingElements $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TaxMappingElements[] = $value;
      } else {
        $this->TaxMappingElements[$offset] = $value;
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
      unset($this->TaxMappingElements[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TaxMappingElements Return the current element
     */
    public function current()
    {
      return current($this->TaxMappingElements);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TaxMappingElements);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TaxMappingElements);
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
      reset($this->TaxMappingElements);
    }

    /**
     * Countable implementation
     *
     * @return TaxMappingElements Return count of elements
     */
    public function count()
    {
      return count($this->TaxMappingElements);
    }

}
