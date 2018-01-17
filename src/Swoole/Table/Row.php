<?php
namespace Swoole\Table;

use ArrayAccess;

/**
 * 内存表行对象
 */
class Row implements ArrayAccess
{
    /**
     * 键
     *
     * @var string
     */
    public $key;

    /**
     * 值
     *
     * @var
     */
    public $value;

    /**
     * 判断指定字段是否存在
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
    }

    /**
     * 获得指定字段的值
     *
     * @param string $offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
    }

    /**
     * 设置指定字段的值
     *
     * @param string $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
    }

    /**
     * 清空指定字段
     *
     * @param string $offset
     */
    public function offsetUnset($offset)
    {
    }
}
