<?php

namespace TwentyFourSeven\ClientService;

class ArrayOfAccountingGroup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountingGroup[] $AccountingGroup
     */
    protected $AccountingGroup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountingGroup[]
     */
    public function getAccountingGroup()
    {
      return $this->AccountingGroup;
    }

    /**
     * @param AccountingGroup[] $AccountingGroup
     * @return \TwentyFourSeven\ClientService\ArrayOfAccountingGroup
     */
    public function setAccountingGroup(array $AccountingGroup = null)
    {
      $this->AccountingGroup = $AccountingGroup;
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
      return isset($this->AccountingGroup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountingGroup
     */
    public function offsetGet($offset)
    {
      return $this->AccountingGroup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountingGroup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountingGroup[] = $value;
      } else {
        $this->AccountingGroup[$offset] = $value;
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
      unset($this->AccountingGroup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountingGroup Return the current element
     */
    public function current()
    {
      return current($this->AccountingGroup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountingGroup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountingGroup);
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
      reset($this->AccountingGroup);
    }

    /**
     * Countable implementation
     *
     * @return AccountingGroup Return count of elements
     */
    public function count()
    {
      return count($this->AccountingGroup);
    }

}
