<?php

namespace TwentyFourSeven\CompanyService;

class ArrayOfRelation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Relation[] $Relation
     */
    protected $Relation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Relation[]
     */
    public function getRelation()
    {
      return $this->Relation;
    }

    /**
     * @param Relation[] $Relation
     * @return \TwentyFourSeven\CompanyService\ArrayOfRelation
     */
    public function setRelation(array $Relation = null)
    {
      $this->Relation = $Relation;
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
      return isset($this->Relation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Relation
     */
    public function offsetGet($offset)
    {
      return $this->Relation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Relation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Relation[] = $value;
      } else {
        $this->Relation[$offset] = $value;
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
      unset($this->Relation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Relation Return the current element
     */
    public function current()
    {
      return current($this->Relation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Relation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Relation);
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
      reset($this->Relation);
    }

    /**
     * Countable implementation
     *
     * @return Relation Return count of elements
     */
    public function count()
    {
      return count($this->Relation);
    }

}
