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
     *
     *
     * @var array
     */
    public $header;

    /**
     *
     *
     * @var array
     */
    public $server;

    /**
     *
     *
     * @var array
     */
    public $request;

    /**
     *
     *
     * @var array
     */
    public $cookie;

    /**
     *
     *
     * @var array
     */
    public $get;

    /**
     *
     *
     * @var array
     */
    public $files;

    /**
     *
     *
     * @var array
     */
    public $post;

    /**
     *
     *
     * @var array
     */
    public $tmpfiles;

    /**
     * 获得接收的原始数据
     *
     * @return string
     */
    public function getData()
    {
    }

    /**
     * 获得原始请求体
     *
     * @return string
     */
    public function rawcontent()
    {
    }
}
