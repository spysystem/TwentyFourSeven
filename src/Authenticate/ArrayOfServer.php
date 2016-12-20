<?php

namespace TwentyFourSeven\Authenticate;

/**
 * Class ArrayOfServer
 *
 * @package TwentyFourSeven\Authenticate
 */
class ArrayOfServer implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Server[] $Server
     */
    protected $Server = null;


	/**
	 * ArrayOfServer constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return Server[]
     */
    public function getServer()
    {
      return $this->Server;
    }

    /**
     * @param Server[] $Server
     * @return \TwentyFourSeven\Authenticate\ArrayOfServer
     */
    public function setServer(array $Server = null)
    {
      $this->Server = $Server;
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
      return isset($this->Server[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Server
     */
    public function offsetGet($offset)
    {
      return $this->Server[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Server $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Server[] = $value;
      } else {
        $this->Server[$offset] = $value;
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
      unset($this->Server[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Server Return the current element
     */
    public function current()
    {
      return current($this->Server);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Server);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Server);
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
      reset($this->Server);
    }

    /**
     * Countable implementation
     *
     * @return Server Return count of elements
     */
    public function count()
    {
      return count($this->Server);
    }

}
