<?php
namespace Swoole;

/**
 * 客户端
 */
class Client
{
    /**
     * 数据处理方式：发送或接收带外数据
     */
    const MSG_OOB = 1;

    /**
     * 数据处理方式：窥看外来消息
     */
    const MSG_PEEK = 2;

    /**
     * 数据处理方式：仅本操作非阻塞
     */
    const MSG_DONTWAIT = 3;

    /**
     * 数据处理方式：等待所有数据
     */
    const MSG_WAITALL = 4;

    /**
     * 最后出现的错误码
     *
     * @var int
     */
    public $errCode;

    /**
     * Socket 描述符
     *
     * @var int
     */
    public $sock;

    /**
     * 是否可以重用
     *
     * @var bool
     */
    public $reuse;

    /**
     * 重用次数
     *
     * @var int
     */
    public $reuseCount;

    /**
     * Socket 类型
     *
     * @var int
     */
    public $type;

    /**
     * 客户端标识
     *
     * @var int
     */
    public $id;

    /**
     * 客户端配置
     *
     * @var array
     */
    public $setting;

    /**
     * 连接已建立事件回调
     *
     * @var callable
     */
    public $onConnect;

    /**
     * 发生错误事件回调
     *
     * @var callable
     */
    public $onError;

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
     * SSL 准备就绪事件回调
     *
     * @var callable
     */
    public $onSSLReady;

    /**
     * 创建客户端对象
     *
     * @param int $sockType
     * @param bool $isAsync
     * @param string $id 客户端标识。主要用于复用，默认为 "ip:port"
     */
    public function __construct($sockType, $isAsync = false, $id = null)
    {
    }

    /**
     * 设置客户端配置
     *
     * @param array $setting
     *
     * @return bool
     */
    public function set(array $setting)
    {
    }

    /**
     * 连接服务器
     *
     * @param string $host
     * @param int $port
     * @param float $timeout
     * @param int $flag
     *
     * @return bool
     */
    public function connect($host, $port = 0, $timeout = 0.5, $flag = 0)
    {
    }

    /**
     * 接收数据
     *
     * @param int $size
     * @param int $flags
     *
     * @return string|bool
     */
    public function recv( $size = 65535, $flags = 0)
    {
    }

    /**
     * 发送数据
     *
     * @param string $data
     * @param int $flag
     *
     * @return int|bool
     */
    public function send($data, $flag = 0)
    {
    }

    /**
     * 判断通讯管道
     *
     * @param int $writeSocket
     *
     * @return bool
     */
    public function pipe($writeSocket)
    {
    }

    /**
     * 发送文件
     *
     * @param string $filename
     * @param int $offset
     * @param int $length
     *
     * @return bool
     */
    public function sendfile($filename, $offset = 0, $length = 0)
    {
    }

    /**
     * 发送 Udp 数据包
     *
     * @param string $host
     * @param int $port
     * @param string $data
     *
     * @return bool
     */
    public function sendto($host, $port, $data)
    {
    }

    /**
     * 暂停接收数据
     *
     * @return bool
     */
    public function sleep()
    {
    }

    /**
     * 暂停接收数据
     *
     * @return bool
     */
    public function pause()
    {
    }

    /**
     * 恢复数据接收
     *
     * @return bool
     */
    public function wakeup()
    {
    }

    /**
     * 恢复数据接收
     *
     * @return bool
     */
    public function resume()
    {
    }

    /**
     * 启用 SSL 支持
     *
     * @param callable $callback 异步客户端可设置 SSL 就绪回调
     *
     * @return bool
     */
    public function enableSSL($callback = null)
    {
    }

    /**
     * 获得连接证书
     *
     * @param bool $allowSelfSigned 允许自签名证书
     *
     * @return string
     */
    public function getPeerCert($allowSelfSigned = false)
    {
    }

    /**
     * 验证连接证书
     *
     * @return string
     */
    public function verifyPeerCert()
    {
    }

    /**
     * 判断连接是否已经建立
     *
     * @return bool
     */
    public function isConnected()
    {
    }

    /**
     * 获得 Socket 字符串表示
     *
     * @return array
     */
    public function getsockname()
    {
    }

    /**
     * 获得 Socket 字符串表示。用于 Udp 协议
     *
     * @return array
     */
    public function getpeername()
    {
    }

    /**
     * 关闭连接
     *
     * @param bool $force
     *
     * @return bool
     */
    public function close($force = false)
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
