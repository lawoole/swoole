<?php
namespace Swoole;

use ArrayAccess;
use Countable;
use Iterator;

/**
 * 内存表
 */
class Table implements Iterator, Countable, ArrayAccess
{
    /**
     * 列类型：整形
     */
    const TYPE_INT = 1;

    /**
     * 列类型：字符串
     */
    const TYPE_STRING = 6;

    /**
     * 列类型：浮点形
     */
    const TYPE_FLOAT = 7;

    /**
     * 创建内存表对象
     *
     * @param int $size 内存表大小
     * @param float $conflict 预留 Hash 计算冲突比率
     */
    public function __construct($size, $conflict = 0.2)
    {
    }

    /**
     * 定义列
     *
     * @param string $name
     * @param int $type
     * @param int $size
     *
     * @return bool
     */
    public function column($name, $type, $size = 0)
    {
    }

    /**
     * 创建内存表
     *
     * @return bool
     */
    public function create()
    {
    }

    /**
     * 销毁内存表
     *
     * @return bool
     */
    public function destroy()
    {
    }

    /**
     * 设置数据
     *
     * @param string $key
     * @param array $values
     *
     * @return bool
     */
    public function set($key, array $values)
    {
    }

    /**
     * 字段自增操作
     *
     * @param string $key
     * @param string $column
     * @param int|float $incrBy
     *
     * @return bool
     */
    public function incr($key, $column, $incrBy = 1)
    {
    }

    /**
     * 字段自减操作
     *
     * @param string $key
     * @param string $column
     * @param int|float $decrBy
     *
     * @return bool
     */
    public function decr($key, $column, $decrBy = 1)
    {
    }

    /**
     * 获得指定行数据
     *
     * @param string $key
     * @param string $field
     *
     * @return array|mixed
     */
    public function get($key, $field = null)
    {
    }

    /**
     * 判断指定行是否存在
     *
     * @param string $key
     *
     * @return bool
     */
    public function exists($key)
    {
    }

    /**
     * 删除指定行
     *
     * @param string $key
     */
    public function del($key)
    {
    }

    /**
     * 获得内存表占用内存大小
     *
     * @return int
     */
    public function getMemorySize()
    {
    }

    /**
     * 获得当前行数据
     *
     * @return array
     */
    public function current()
    {
    }

    /**
     * 移动迭代指针到下一行
     */
    public function next()
    {
    }

    /**
     * 获得当前行 Key
     *
     * @return string
     */
    public function key()
    {
    }

    /**
     * 判断当前指针是否有效
     *
     * @return bool
     */
    public function valid()
    {
    }

    /**
     * 重置迭代器指针
     */
    public function rewind()
    {
    }

    /**
     * 判断指定行是否存在
     *
     * @param string $offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
    }

    /**
     * 获得指定行记录
     *
     * @param string $offset
     *
     * @return \Swoole\Table\Row
     */
    public function offsetGet($offset)
    {
    }

    /**
     * 设置数据
     *
     * @param string $offset
     * @param array $value
     */
    public function offsetSet($offset, $value)
    {
    }

    /**
     * 删除指定行
     *
     * @param string $offset
     */
    public function offsetUnset($offset)
    {
    }

    /**
     * 获得内存表大小
     *
     * @param int $mode 计算模式，为 0 表示计算行数，为 1 表示计算行数与列数的积
     *
     * @return int
     */
    public function count($mode = 0)
    {
    }
}
