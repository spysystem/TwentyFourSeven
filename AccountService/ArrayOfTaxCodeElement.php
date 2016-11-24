<?php

namespace TwentyFourSeven\AccountService;

class ArrayOfTaxCodeElement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TaxCodeElement[] $TaxCodeElement
     */
    protected $TaxCodeElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxCodeElement[]
     */
    public function getTaxCodeElement()
    {
      return $this->TaxCodeElement;
    }

    /**
     * @param TaxCodeElement[] $TaxCodeElement
     * @return \TwentyFourSeven\AccountService\ArrayOfTaxCodeElement
     */
    public function setTaxCodeElement(array $TaxCodeElement = null)
    {
      $this->TaxCodeElement = $TaxCodeElement;
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
      return isset($this->TaxCodeElement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TaxCodeElement
     */
    public function offsetGet($offset)
    {
      return $this->TaxCodeElement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TaxCodeElement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TaxCodeElement[] = $value;
      } else {
        $this->TaxCodeElement[$offset] = $value;
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
      unset($this->TaxCodeElement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TaxCodeElement Return the current element
     */
    public function current()
    {
      return current($this->TaxCodeElement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TaxCodeElement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TaxCodeElement);
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
      reset($this->TaxCodeElement);
    }

    /**
     * Countable implementation
     *
     * @return TaxCodeElement Return count of elements
     */
    public function count()
    {
      return count($this->TaxCodeElement);
    }

}
