<?php
namespace Swoole\Connection;

use ArrayAccess;
use Countable;
use Iterator as PhpIterator;

/**
 * 连接迭代器
 *
 * @since 1.7.16
 */
class Iterator implements PhpIterator, Countable, ArrayAccess
{
    /**
     * No Document
     *
     * @param int $offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
    }

    /**
     * No Document
     *
     * @param int $offset
     *
     * @return int
     */
    public function offsetGet($offset)
    {
    }

    /**
     * No Document
     *
     * @param int $offset
     * @param int $value
     */
    public function offsetSet($offset, $value)
    {
    }

    /**
     * No Document
     *
     * @param int $offset
     */
    public function offsetUnset($offset) {
    }

    /**
     * No Document
     *
     * @return int
     */
    public function count()
    {
    }

    /**
     * No Document
     *
     * @return int
     */
    public function current()
    {
    }

    /**
     * No Document
     */
    public function next()
    {
    }

    /**
     * No Document
     *
     * @return int
     */
    public function key()
    {
    }

    /**
     * No Document
     *
     * @return bool
     */
    public function valid()
    {
    }

    /**
     * No Document
     */
    public function rewind()
    {
    }
}