<?php
namespace Swoole\Http;

/**
 * Http 请求
 */
class Request
{
    /**
     * 连接描述符
     *
     * @var int
     */
    public $fd;

    /**
     * 请求头部分
     *
     * @var array
     */
    public $header;

    /**
     * $_SERVER
     *
     * @var array
     */
    public $server;

    /**
     * $_REQUEST
     *
     * @var array
     */
    public $request;

    /**
     * $_COOKIE
     *
     * @var array
     */
    public $cookie;

    /**
     * $_GET
     *
     * @var array
     */
    public $get;

    /**
     * $_FILES
     *
     * @var array
     */
    public $files;

    /**
     * $_POST
     *
     * @var array
     */
    public $post;

    /**
     * 临时文件路径
     *
     * @var array
     */
    public $tmpfiles;

    /**
     * 获得原始请求体
     *
     * @return string
     */
    public function rawcontent()
    {
    }
}
