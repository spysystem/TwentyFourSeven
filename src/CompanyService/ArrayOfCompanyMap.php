<?php

namespace TwentyFourSeven\CompanyService;

class ArrayOfCompanyMap implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CompanyMap[] $CompanyMap
     */
    protected $CompanyMap = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CompanyMap[]
     */
    public function getCompanyMap()
    {
      return $this->CompanyMap;
    }

    /**
     * @param CompanyMap[] $CompanyMap
     * @return \TwentyFourSeven\CompanyService\ArrayOfCompanyMap
     */
    public function setCompanyMap(array $CompanyMap = null)
    {
      $this->CompanyMap = $CompanyMap;
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
      return isset($this->CompanyMap[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CompanyMap
     */
    public function offsetGet($offset)
    {
      return $this->CompanyMap[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CompanyMap $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CompanyMap[] = $value;
      } else {
        $this->CompanyMap[$offset] = $value;
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
      unset($this->CompanyMap[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CompanyMap Return the current element
     */
    public function current()
    {
      return current($this->CompanyMap);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CompanyMap);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CompanyMap);
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
      reset($this->CompanyMap);
    }

    /**
     * Countable implementation
     *
     * @return CompanyMap Return count of elements
     */
    public function count()
    {
      return count($this->CompanyMap);
    }

}
