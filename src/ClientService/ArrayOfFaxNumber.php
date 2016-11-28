<?php

namespace TwentyFourSeven\ClientService;

class ArrayOfFaxNumber implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FaxNumber[] $FaxNumber
     */
    protected $FaxNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FaxNumber[]
     */
    public function getFaxNumber()
    {
      return $this->FaxNumber;
    }

    /**
     * @param FaxNumber[] $FaxNumber
     * @return \TwentyFourSeven\ClientService\ArrayOfFaxNumber
     */
    public function setFaxNumber(array $FaxNumber = null)
    {
      $this->FaxNumber = $FaxNumber;
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
      return isset($this->FaxNumber[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FaxNumber
     */
    public function offsetGet($offset)
    {
      return $this->FaxNumber[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FaxNumber $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FaxNumber[] = $value;
      } else {
        $this->FaxNumber[$offset] = $value;
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
      unset($this->FaxNumber[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FaxNumber Return the current element
     */
    public function current()
    {
      return current($this->FaxNumber);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FaxNumber);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FaxNumber);
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
      reset($this->FaxNumber);
    }

    /**
     * Countable implementation
     *
     * @return FaxNumber Return count of elements
     */
    public function count()
    {
      return count($this->FaxNumber);
    }

}
