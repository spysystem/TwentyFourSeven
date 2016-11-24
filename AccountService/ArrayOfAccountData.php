<?php

namespace TwentyFourSeven\AccountService;

class ArrayOfAccountData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountData[] $AccountData
     */
    protected $AccountData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountData[]
     */
    public function getAccountData()
    {
      return $this->AccountData;
    }

    /**
     * @param AccountData[] $AccountData
     * @return \TwentyFourSeven\AccountService\ArrayOfAccountData
     */
    public function setAccountData(array $AccountData = null)
    {
      $this->AccountData = $AccountData;
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
      return isset($this->AccountData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountData
     */
    public function offsetGet($offset)
    {
      return $this->AccountData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountData[] = $value;
      } else {
        $this->AccountData[$offset] = $value;
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
      unset($this->AccountData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountData Return the current element
     */
    public function current()
    {
      return current($this->AccountData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountData);
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
      reset($this->AccountData);
    }

    /**
     * Countable implementation
     *
     * @return AccountData Return count of elements
     */
    public function count()
    {
      return count($this->AccountData);
    }

}
