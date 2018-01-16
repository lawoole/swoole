<?php
namespace Swoole\Http;

/**
 * Http 响应
 */
class Response
{
    /**
     * 连接描述符
     *
     * @var int
     */
    public $fd;

    /**
     * 响应头
     *
     * @var array
     */
    public $header;

    /**
     * Cookies
     *
     * @var array
     */
    public $cookie;

    /**
     * 响应头
     *
     * @var array
     */
    public $trailer;

    /**
     * 分段向客户端写入数据
     *
     * @param string $data
     *
     * @return bool
     */
    public function write($data)
    {
    }

    /**
     * 发送数据并结束处理
     *
     * @param string $data
     *
     * @return bool
     */
    public function end($data = null)
    {
    }

    /**
     * 发送文件作为响应
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
     * 添加 Cookie 定义
     *
     * @param string $key
     * @param string $value
     * @param int $expire
     * @param string $path
     * @param string $domain
     * @param bool $secure
     * @param bool $httponly
     */
    public function cookie($key, $value = '', $expire = 0, $path = '/', $domain  = '', $secure = false,
        $httponly = false)
    {
    }

    /**
     * 添加 Cookie 定义。此方法不会对 $value 进行 urlencode 编码
     *
     * @param string $key
     * @param string $value
     * @param int $expire
     * @param string $path
     * @param string $domain
     * @param bool $secure
     * @param bool $httponly
     */
    public function rawcookie($key, $value = '', $expire = 0, $path = '/', $domain  = '', $secure = false,
        $httponly = false)
    {
    }

    /**
     * 添加响应头
     *
     * @param string $key
     * @param string $value
     * @param bool $ucword
     */
    public function header($key, $value, $ucword = true)
    {
    }

    /**
     * 初始化响应头
     */
    public function initHeader()
    {
    }

    /**
     * 启用 Gzip 压缩
     *
     * @param int $level
     */
    public function gzip($level = 1)
    {
    }

    /**
     * 设置响应状态码
     *
     * @param string $status
     */
    public function status($status)
    {
    }
}
