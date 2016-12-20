<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class ArrayOfAPIException
 *
 * @package TwentyFourSeven\CompanyService
 */
class ArrayOfAPIException implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APIException[] $APIException
     */
    protected $APIException = null;


	/**
	 * ArrayOfAPIException constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return APIException[]
     */
    public function getAPIException()
    {
      return $this->APIException;
    }

    /**
     * @param APIException[] $APIException
     * @return \TwentyFourSeven\CompanyService\ArrayOfAPIException
     */
    public function setAPIException(array $APIException = null)
    {
      $this->APIException = $APIException;
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
      return isset($this->APIException[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APIException
     */
    public function offsetGet($offset)
    {
      return $this->APIException[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APIException $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->APIException[] = $value;
      } else {
        $this->APIException[$offset] = $value;
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
      unset($this->APIException[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APIException Return the current element
     */
    public function current()
    {
      return current($this->APIException);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->APIException);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->APIException);
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
      reset($this->APIException);
    }

    /**
     * Countable implementation
     *
     * @return APIException Return count of elements
     */
    public function count()
    {
      return count($this->APIException);
    }

}
