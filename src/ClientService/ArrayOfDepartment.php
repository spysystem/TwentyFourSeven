<?php

namespace TwentyFourSeven\ClientService;

/**
 * Class ArrayOfDepartment
 *
 * @package TwentyFourSeven\ClientService
 */
class ArrayOfDepartment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Department[] $Department
     */
    protected $Department = null;


	/**
	 * ArrayOfDepartment constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return Department[]
     */
    public function getDepartment()
    {
      return $this->Department;
    }

    /**
     * @param Department[] $Department
     * @return \TwentyFourSeven\ClientService\ArrayOfDepartment
     */
    public function setDepartment(array $Department = null)
    {
      $this->Department = $Department;
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
      return isset($this->Department[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Department
     */
    public function offsetGet($offset)
    {
      return $this->Department[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Department $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Department[] = $value;
      } else {
        $this->Department[$offset] = $value;
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
      unset($this->Department[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Department Return the current element
     */
    public function current()
    {
      return current($this->Department);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Department);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Department);
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
      reset($this->Department);
    }

    /**
     * Countable implementation
     *
     * @return Department Return count of elements
     */
    public function count()
    {
      return count($this->Department);
    }

}
