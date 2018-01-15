<?php
namespace Swoole\Server;

/**
 * 服务端口
 */
class Port
{
    /**
     * 监听地址
     *
     * @var string
     */
    public $host;

    /**
     * 监听端口
     *
     * @var int
     */
    public $port;

    /**
     * Socket 类型
     *
     * @var int
     */
    public $type;

    /**
     * Socket 资源对象
     *
     * @var resource
     */
    public $sock;

    /**
     * 端口配置
     *
     * @var array
     */
    public $setting;

    /**
     * 连接迭代器
     *
     * @var \Swoole\Connection\Iterator
     */
    public $connections;

    /**
     * 连接接入事件回调
     *
     * @var callable
     */
    public $onConnect;

    /**
     * 收到数据事件回调
     *
     * @var callable
     */
    public $onReceive;

    /**
     * 连接关闭事件回调
     *
     * @var callable
     */
    public $onClose;

    /**
     * 收到数据包事件回调
     *
     * @var callable
     */
    public $onPacket;

    /**
     * 缓冲区触及高位线事件回调
     *
     * @var callable
     */
    public $onBufferFull;

    /**
     * 缓冲区触及低位线事件回调
     *
     * @var callable
     */
    public $onBufferEmpty;

    /**
     * 收到 Http 请求事件回调
     *
     * @var callable
     */
    public $onRequest;

    /**
     * WebSocket 握手事件回调
     *
     * @var callable
     */
    public $onHandShake;

    /**
     * 收到 WebSocket 数据帧事件回调
     *
     * @var callable
     */
    public $onMessage;

    /**
     * WebSocket 连接建立事件回调
     *
     * @var callable
     */
    public $onOpen;

    /**
     * 设置端口配置
     *
     * @param array $options
     */
    public function set($options)
    {
    }

    /**
     * 注册事件回调
     *
     * @param string $event
     * @param callable $callback
     *
     * @return bool
     */
    public function on($event, $callback)
    {
    }

    /**
     * 获得 Socket 资源对象
     *
     * @return resource
     */
    public function getSocket()
    {
    }
}