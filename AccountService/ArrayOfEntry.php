<?php

namespace TwentyFourSeven\AccountService;

class ArrayOfEntry implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Entry[] $Entry
     */
    protected $Entry = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Entry[]
     */
    public function getEntry()
    {
      return $this->Entry;
    }

    /**
     * @param Entry[] $Entry
     * @return \TwentyFourSeven\AccountService\ArrayOfEntry
     */
    public function setEntry(array $Entry = null)
    {
      $this->Entry = $Entry;
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
      return isset($this->Entry[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Entry
     */
    public function offsetGet($offset)
    {
      return $this->Entry[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Entry $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Entry[] = $value;
      } else {
        $this->Entry[$offset] = $value;
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
      unset($this->Entry[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Entry Return the current element
     */
    public function current()
    {
      return current($this->Entry);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Entry);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Entry);
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
      reset($this->Entry);
    }

    /**
     * Countable implementation
     *
     * @return Entry Return count of elements
     */
    public function count()
    {
      return count($this->Entry);
    }

}
