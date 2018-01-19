<?php
namespace Swoole\Http;

/**
 * Http/WebSocket 客户端
 */
class Client
{
    /**
     * 客户端类型
     *
     * @var int
     */
    public $type;

    /**
     * 客户端配置
     *
     * @var array
     */
    public $setting;

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
     * 最后响应的状态码
     *
     * @var int
     */
    public $statusCode;

    /**
     * 连接主机
     *
     * @var string
     */
    public $host;

    /**
     * 连接端口
     *
     * @var int
     */
    public $port;

    /**
     * 请求方法
     *
     * @var string
     */
    public $requestMethod;

    /**
     * 请求头
     *
     * @var array
     */
    public $requestHeaders;

    /**
     * 请求体
     *
     * @var string
     */
    public $requestBody;

    /**
     * 请求体文件
     *
     * @var array
     */
    public $uploadFiles;

    /**
     * 请求 Cookie
     *
     * @var array
     */
    public $set_cookie_headers;

    /**
     * 下载目标文件路径
     *
     * @var string
     */
    public $downloadFile;

    /**
     * 响应头
     *
     * @var array
     */
    public $headers;

    /**
     * 响应 Cookie
     *
     * @var array
     */
    public $cookies;

    /**
     * 响应体
     *
     * @var string
     */
    public $body;

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
     * 收到消息事件回调
     *
     * @var callable
     */
    public $onMessage;

    /**
     * 连接关闭事件回调
     *
     * @var callable
     */
    public $onClose;

    /**
     * 创建 Http 客户端
     *
     * @param string $host
     * @param int $port
     * @param bool $ssl
     */
    public function __construct($host, $port = 80, $ssl = false)
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
     * 设置请求方法
     *
     * @param string $method
     *
     * @return bool
     */
    public function setMethod($method)
    {
    }

    /**
     * 设置请求头
     *
     * @param array $headers
     *
     * @return bool
     */
    public function setHeaders(array $headers)
    {
    }

    /**
     * 设置请求 Cookie
     *
     * @param array $cookies
     *
     * @return bool
     */
    public function setCookies(array $cookies)
    {
    }

    /**
     * 设置请求体
     *
     * @param string|array $data
     *
     * @return bool
     */
    public function setData($data)
    {
    }

    /**
     * 添加上传文件
     *
     * @param string $path
     * @param string $name
     * @param string $filename
     * @param string $mimeType
     * @param int $offset
     * @param int $length
     *
     * @return bool
     */
    public function addFile($path, $name, $filename = null, $mimeType = null, $offset = 0, $length = 0)
    {
    }

    /**
     * 发起请求
     *
     * @param string $path
     * @param callable $callback
     *
     * @return bool
     */
    public function execute($path, $callback)
    {
    }

    /**
     * 推送 WebSocket 消息帧
     *
     * @param string $data
     * @param int $opcode
     * @param bool $finish
     *
     * @return bool
     */
    public function push($data, $opcode = WEBSOCKET_OPCODE_TEXT, $finish = true)
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
     * 关闭连接
     *
     * @return bool
     */
    public function close()
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
     * 发起 GET 请求
     *
     * @param string $path
     * @param callable $callback
     *
     * @return bool
     */
    public function get($path, $callback)
    {
    }

    /**
     * 发起 POST 请求
     *
     * @param string $path
     * @param mixed $data
     * @param callable $callback
     *
     * @return bool
     */
    public function post($path, $data, $callback)
    {
    }

    /**
     * 升级为 WebSocket 客户端并进行握手
     *
     * @param string $path
     * @param callable $callback
     *
     * @return bool
     */
    public function upgrade($path, $callback)
    {
    }

    /**
     * 发起请求并将响应写入文件
     *
     * @param string $path
     * @param string $filename
     * @param callable $callback
     * @param int $offset
     *
     * @return bool
     */
    public function download($path, $filename, $callback, $offset = 0)
    {
    }
}
