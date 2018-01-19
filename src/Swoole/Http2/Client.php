<?php
namespace Swoole\Http2;

use Swoole\Client as BaseClient;

/**
 * Http2.0 客户端
 */
class Client extends BaseClient
{
    /**
     * 请求头
     *
     * @var array
     */
    public $requestHeaders;

    /**
     * 请求 Cookie
     *
     * @var array
     */
    public $cookies;

    /**
     * 创建 Http2.0 客户端
     *
     * @param string $host
     * @param int $port
     * @param bool $ssl
     */
    public function __construct($host, $port = 80, $ssl = false)
    {
    }

    /**
     * 设置请求头
     *
     * @param array $headers
     */
    public function setHeaders($headers)
    {
    }

    /**
     * 设置请求 Cookie
     *
     * @param array $cookies
     */
    public function setCookies($cookies)
    {
    }

    /**
     * 发起 GET 请求
     *
     * @param string $url
     * @param callable $callback
     *
     * @return bool
     */
    public function get($url, $callback)
    {
    }

    /**
     * 发起 POST 请求
     *
     * @param string $url
     * @param mixed $data
     * @param callable $callback
     *
     * @return bool
     */
    public function post($url, $data, $callback)
    {
    }

    /**
     * 打开请求流
     *
     * @param string $url
     * @param callable $callback
     *
     * @return int|bool 成功时返回流编号
     */
    public function openStream($url, $callback)
    {
    }

    /**
     * 向流中推送数据
     *
     * @param int $streamId
     * @param mixed $data
     *
     * @return bool
     */
    public function push($streamId, $data)
    {
    }

    /**
     * 关闭流
     *
     * @param int $streamId
     *
     * @return bool
     */
    public function closeStream($streamId)
    {
    }
}
