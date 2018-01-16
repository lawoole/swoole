<?php
namespace Swoole\WebSocket;

/**
 * WebSocket 数据帧
 */
class Frame
{
    /**
     * 连接描述符
     *
     * @var int
     */
    public $fd;

    /**
     * 结束标记
     *
     * @var bool
     */
    public $finish;

    /**
     * 操作码
     *
     * @var int
     */
    public $opcode;

    /**
     * 帧数据
     *
     * @var string
     */
    public $data;
}
