<?php

namespace TwentyFourSeven\ClientService;

/**
 * Class ArrayOfCurrency
 *
 * @package TwentyFourSeven\ClientService
 */
class ArrayOfCurrency implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Currency[] $Currency
     */
    protected $Currency = null;


	/**
	 * ArrayOfCurrency constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return Currency[]
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param Currency[] $Currency
     * @return \TwentyFourSeven\ClientService\ArrayOfCurrency
     */
    public function setCurrency(array $Currency = null)
    {
      $this->Currency = $Currency;
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
      return isset($this->Currency[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Currency
     */
    public function offsetGet($offset)
    {
      return $this->Currency[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Currency $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Currency[] = $value;
      } else {
        $this->Currency[$offset] = $value;
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
      unset($this->Currency[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Currency Return the current element
     */
    public function current()
    {
      return current($this->Currency);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Currency);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Currency);
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
      reset($this->Currency);
    }

    /**
     * Countable implementation
     *
     * @return Currency Return count of elements
     */
    public function count()
    {
      return count($this->Currency);
    }

}
