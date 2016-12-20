<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class ArrayOfShort
 *
 * @package TwentyFourSeven\TransactionService
 */
class ArrayOfShort implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var int[] $short
     */
    protected $short = null;


	/**
	 * ArrayOfShort constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return int[]
     */
    public function getShort()
    {
      return $this->short;
    }

    /**
     * @param int[] $short
     * @return \TwentyFourSeven\TransactionService\ArrayOfShort
     */
    public function setShort(array $short = null)
    {
      $this->short = $short;
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
      return isset($this->short[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return int
     */
    public function offsetGet($offset)
    {
      return $this->short[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param int $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->short[] = $value;
      } else {
        $this->short[$offset] = $value;
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
      unset($this->short[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return int Return the current element
     */
    public function current()
    {
      return current($this->short);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->short);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->short);
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
      reset($this->short);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count()
    {
      return count($this->short);
    }

}
