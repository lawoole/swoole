<?php
namespace Swoole;

/**
 * 内存缓冲
 *
 * 注意：内存缓冲有最大容量限制，为 1024 * 1024 * 128 Byte = 128 MB
 *
 * @since 1.7.5
 */
class Buffer
{
    /**
     * 当前缓冲容量
     *
     * @var int
     */
    public $capacity;

    /**
     * 当前缓冲中实际数据长度
     *
     * @var int
     */
    public $length;

    /**
     * 创建内存缓冲对象
     *
     * @param int $length 初始缓冲容量
     */
    public function __construct($length = 128)
    {
    }

    /**
     * 向缓冲中追加数据
     *
     * @param string $data
     *
     * @return int 最新的缓冲中实际数据长度
     */
    public function append($data)
    {
    }

    /**
     * 截取缓冲数据
     *
     * 注意：只有在截取起始位置为 0 时，移除功能才会起作用
     *
     * @param int $offset
     * @param int $length
     * @param bool $remove 是否从缓冲中移除截取内容
     *
     * @return string
     */
    public function substr($offset, $length = -1, $remove = false)
    {
    }

    /**
     * 向缓冲指定位置写入数据
     *
     * 注意：写入过程不是将数据插入到指定位置，而是直接覆盖指定位置之后的内容
     *
     * @param int $offset
     * @param string $data
     *
     * @return int 最新的缓冲中实际数据长度
     */
    public function write($offset, $data)
    {
    }

    /**
     * 读取缓冲中指定位置和长度的数据
     *
     * @param int $offset
     * @param int $length
     *
     * @return string
     */
    public function read($offset, $length)
    {
    }

    /**
     * 扩充缓冲容量
     *
     * 注意：容量参数只新的缓冲总大小，而非扩充的大小
     *
     * @param int $size 新的缓冲容量
     *
     * @return bool
     */
    public function expand($size)
    {
    }

    /**
     * 回收缓冲中的垃圾空间
     *
     * @since 1.9.4
     */
    public function recycle()
    {
    }

    /**
     * 获得缓存中的所有数据
     *
     * @return string
     */
    public function __toString()
    {
    }
}
