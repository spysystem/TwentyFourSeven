<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class ArrayOfAggregatedData
 *
 * @package TwentyFourSeven\TransactionService
 */
class ArrayOfAggregatedData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AggregatedData[] $AggregatedData
     */
    protected $AggregatedData = null;


	/**
	 * ArrayOfAggregatedData constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return AggregatedData[]
     */
    public function getAggregatedData()
    {
      return $this->AggregatedData;
    }

    /**
     * @param AggregatedData[] $AggregatedData
     * @return \TwentyFourSeven\TransactionService\ArrayOfAggregatedData
     */
    public function setAggregatedData(array $AggregatedData = null)
    {
      $this->AggregatedData = $AggregatedData;
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
      return isset($this->AggregatedData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AggregatedData
     */
    public function offsetGet($offset)
    {
      return $this->AggregatedData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AggregatedData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AggregatedData[] = $value;
      } else {
        $this->AggregatedData[$offset] = $value;
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
      unset($this->AggregatedData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AggregatedData Return the current element
     */
    public function current()
    {
      return current($this->AggregatedData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AggregatedData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AggregatedData);
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
      reset($this->AggregatedData);
    }

    /**
     * Countable implementation
     *
     * @return AggregatedData Return count of elements
     */
    public function count()
    {
      return count($this->AggregatedData);
    }

}
