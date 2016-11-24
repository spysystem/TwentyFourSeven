<?php

namespace TwentyFourSeven\AccountService;

class ArrayOfAccountDataErrors implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountDataErrors[] $AccountDataErrors
     */
    protected $AccountDataErrors = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountDataErrors[]
     */
    public function getAccountDataErrors()
    {
      return $this->AccountDataErrors;
    }

    /**
     * @param AccountDataErrors[] $AccountDataErrors
     * @return \TwentyFourSeven\AccountService\ArrayOfAccountDataErrors
     */
    public function setAccountDataErrors(array $AccountDataErrors = null)
    {
      $this->AccountDataErrors = $AccountDataErrors;
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
      return isset($this->AccountDataErrors[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountDataErrors
     */
    public function offsetGet($offset)
    {
      return $this->AccountDataErrors[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountDataErrors $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountDataErrors[] = $value;
      } else {
        $this->AccountDataErrors[$offset] = $value;
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
      unset($this->AccountDataErrors[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountDataErrors Return the current element
     */
    public function current()
    {
      return current($this->AccountDataErrors);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountDataErrors);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountDataErrors);
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
      reset($this->AccountDataErrors);
    }

    /**
     * Countable implementation
     *
     * @return AccountDataErrors Return count of elements
     */
    public function count()
    {
      return count($this->AccountDataErrors);
    }

}
