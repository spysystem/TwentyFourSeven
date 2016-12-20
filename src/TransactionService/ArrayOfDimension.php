<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class ArrayOfDimension
 *
 * @package TwentyFourSeven\TransactionService
 */
class ArrayOfDimension implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Dimension[] $Dimension
     */
    protected $Dimension = null;


	/**
	 * ArrayOfDimension constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return Dimension[]
     */
    public function getDimension()
    {
      return $this->Dimension;
    }

    /**
     * @param Dimension[] $Dimension
     * @return \TwentyFourSeven\TransactionService\ArrayOfDimension
     */
    public function setDimension(array $Dimension = null)
    {
      $this->Dimension = $Dimension;
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
      return isset($this->Dimension[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Dimension
     */
    public function offsetGet($offset)
    {
      return $this->Dimension[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Dimension $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Dimension[] = $value;
      } else {
        $this->Dimension[$offset] = $value;
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
      unset($this->Dimension[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Dimension Return the current element
     */
    public function current()
    {
      return current($this->Dimension);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Dimension);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Dimension);
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
      reset($this->Dimension);
    }

    /**
     * Countable implementation
     *
     * @return Dimension Return count of elements
     */
    public function count()
    {
      return count($this->Dimension);
    }

}
