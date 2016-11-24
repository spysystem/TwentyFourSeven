<?php

namespace TwentyFourSeven\AccountService;

class ArrayOfVoucher implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Voucher[] $Voucher
     */
    protected $Voucher = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Voucher[]
     */
    public function getVoucher()
    {
      return $this->Voucher;
    }

    /**
     * @param Voucher[] $Voucher
     * @return \TwentyFourSeven\AccountService\ArrayOfVoucher
     */
    public function setVoucher(array $Voucher = null)
    {
      $this->Voucher = $Voucher;
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
      return isset($this->Voucher[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Voucher
     */
    public function offsetGet($offset)
    {
      return $this->Voucher[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Voucher $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Voucher[] = $value;
      } else {
        $this->Voucher[$offset] = $value;
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
      unset($this->Voucher[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Voucher Return the current element
     */
    public function current()
    {
      return current($this->Voucher);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Voucher);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Voucher);
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
      reset($this->Voucher);
    }

    /**
     * Countable implementation
     *
     * @return Voucher Return count of elements
     */
    public function count()
    {
      return count($this->Voucher);
    }

}
