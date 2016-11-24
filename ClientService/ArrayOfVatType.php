<?php

namespace TwentyFourSeven\ClientService;

class ArrayOfVatType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VatType[] $VatType
     */
    protected $VatType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VatType[]
     */
    public function getVatType()
    {
      return $this->VatType;
    }

    /**
     * @param VatType[] $VatType
     * @return \TwentyFourSeven\ClientService\ArrayOfVatType
     */
    public function setVatType(array $VatType = null)
    {
      $this->VatType = $VatType;
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
      return isset($this->VatType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VatType
     */
    public function offsetGet($offset)
    {
      return $this->VatType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VatType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->VatType[] = $value;
      } else {
        $this->VatType[$offset] = $value;
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
      unset($this->VatType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VatType Return the current element
     */
    public function current()
    {
      return current($this->VatType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VatType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VatType);
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
      reset($this->VatType);
    }

    /**
     * Countable implementation
     *
     * @return VatType Return count of elements
     */
    public function count()
    {
      return count($this->VatType);
    }

}
