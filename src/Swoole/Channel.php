<?php
namespace Swoole;

/**
 * 内存队列
 */
class Channel
{
    /**
     * 创建内存队列对象
     *
     * @param int $size
     */
    public function __construct($size = 8192)
    {
    }

    /**
     * 向队列中推入数据
     *
     * @param mixed $data
     *
     * @return bool
     */
    public function push($data)
    {
    }

    /**
     * 从队列中拉取数据
     *
     * @return mixed
     */
    public function pop()
    {
    }

    /**
     * 获得内存队列状态
     *
     * @return array
     */
    public function stats()
    {
    }
}
