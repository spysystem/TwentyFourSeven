<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class ArrayOfLinkModel
 *
 * @package TwentyFourSeven\AccountService
 */
class ArrayOfLinkModel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LinkModel[] $LinkModel
     */
    protected $LinkModel = null;


	/**
	 * ArrayOfLinkModel constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return LinkModel[]
     */
    public function getLinkModel()
    {
      return $this->LinkModel;
    }

    /**
     * @param LinkModel[] $LinkModel
     * @return \TwentyFourSeven\AccountService\ArrayOfLinkModel
     */
    public function setLinkModel(array $LinkModel = null)
    {
      $this->LinkModel = $LinkModel;
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
      return isset($this->LinkModel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LinkModel
     */
    public function offsetGet($offset)
    {
      return $this->LinkModel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LinkModel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LinkModel[] = $value;
      } else {
        $this->LinkModel[$offset] = $value;
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
      unset($this->LinkModel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LinkModel Return the current element
     */
    public function current()
    {
      return current($this->LinkModel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LinkModel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LinkModel);
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
      reset($this->LinkModel);
    }

    /**
     * Countable implementation
     *
     * @return LinkModel Return count of elements
     */
    public function count()
    {
      return count($this->LinkModel);
    }

}
