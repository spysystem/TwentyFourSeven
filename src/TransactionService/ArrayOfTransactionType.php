<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class ArrayOfTransactionType
 *
 * @package TwentyFourSeven\TransactionService
 */
class ArrayOfTransactionType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TransactionType[] $TransactionType
     */
    protected $TransactionType = null;


	/**
	 * ArrayOfTransactionType constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return TransactionType[]
     */
    public function getTransactionType()
    {
      return $this->TransactionType;
    }

    /**
     * @param TransactionType[] $TransactionType
     * @return \TwentyFourSeven\TransactionService\ArrayOfTransactionType
     */
    public function setTransactionType(array $TransactionType = null)
    {
      $this->TransactionType = $TransactionType;
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
      return isset($this->TransactionType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TransactionType
     */
    public function offsetGet($offset)
    {
      return $this->TransactionType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TransactionType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TransactionType[] = $value;
      } else {
        $this->TransactionType[$offset] = $value;
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
      unset($this->TransactionType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TransactionType Return the current element
     */
    public function current()
    {
      return current($this->TransactionType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TransactionType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TransactionType);
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
      reset($this->TransactionType);
    }

    /**
     * Countable implementation
     *
     * @return TransactionType Return count of elements
     */
    public function count()
    {
      return count($this->TransactionType);
    }

}
