<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class ArrayOfTransaction
 *
 * @package TwentyFourSeven\TransactionService
 */
class ArrayOfTransaction implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Transaction[] $Transaction
     */
    protected $Transaction = null;


	/**
	 * ArrayOfTransaction constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return Transaction[]
     */
    public function getTransaction()
    {
      return $this->Transaction;
    }

    /**
     * @param Transaction[] $Transaction
     * @return \TwentyFourSeven\TransactionService\ArrayOfTransaction
     */
    public function setTransaction(array $Transaction = null)
    {
      $this->Transaction = $Transaction;
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
      return isset($this->Transaction[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Transaction
     */
    public function offsetGet($offset)
    {
      return $this->Transaction[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Transaction $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Transaction[] = $value;
      } else {
        $this->Transaction[$offset] = $value;
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
      unset($this->Transaction[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Transaction Return the current element
     */
    public function current()
    {
      return current($this->Transaction);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Transaction);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Transaction);
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
      reset($this->Transaction);
    }

    /**
     * Countable implementation
     *
     * @return Transaction Return count of elements
     */
    public function count()
    {
      return count($this->Transaction);
    }

}
