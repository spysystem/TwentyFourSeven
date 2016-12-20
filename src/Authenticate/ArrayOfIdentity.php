<?php

namespace TwentyFourSeven\Authenticate;

/**
 * Class ArrayOfIdentity
 *
 * @package TwentyFourSeven\Authenticate
 */
class ArrayOfIdentity implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Identity[] $Identity
     */
    protected $Identity = null;


	/**
	 * ArrayOfIdentity constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return Identity[]
     */
    public function getIdentity()
    {
      return $this->Identity;
    }

    /**
     * @param Identity[] $Identity
     * @return \TwentyFourSeven\Authenticate\ArrayOfIdentity
     */
    public function setIdentity(array $Identity = null)
    {
      $this->Identity = $Identity;
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
      return isset($this->Identity[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Identity
     */
    public function offsetGet($offset)
    {
      return $this->Identity[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Identity $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Identity[] = $value;
      } else {
        $this->Identity[$offset] = $value;
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
      unset($this->Identity[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Identity Return the current element
     */
    public function current()
    {
      return current($this->Identity);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Identity);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Identity);
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
      reset($this->Identity);
    }

    /**
     * Countable implementation
     *
     * @return Identity Return count of elements
     */
    public function count()
    {
      return count($this->Identity);
    }

}
