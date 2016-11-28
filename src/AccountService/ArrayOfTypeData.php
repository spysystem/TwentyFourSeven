<?php

namespace TwentyFourSeven\AccountService;

class ArrayOfTypeData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TypeData[] $TypeData
     */
    protected $TypeData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TypeData[]
     */
    public function getTypeData()
    {
      return $this->TypeData;
    }

    /**
     * @param TypeData[] $TypeData
     * @return \TwentyFourSeven\AccountService\ArrayOfTypeData
     */
    public function setTypeData(array $TypeData = null)
    {
      $this->TypeData = $TypeData;
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
      return isset($this->TypeData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TypeData
     */
    public function offsetGet($offset)
    {
      return $this->TypeData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TypeData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TypeData[] = $value;
      } else {
        $this->TypeData[$offset] = $value;
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
      unset($this->TypeData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TypeData Return the current element
     */
    public function current()
    {
      return current($this->TypeData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TypeData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TypeData);
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
      reset($this->TypeData);
    }

    /**
     * Countable implementation
     *
     * @return TypeData Return count of elements
     */
    public function count()
    {
      return count($this->TypeData);
    }

}
