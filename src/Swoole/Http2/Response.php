<?php
namespace Swoole\Http2;

/**
 * Http2.0 响应
 */
class Response
{
    /**
     * 响应状态码
     *
     * @var int
     */
    public $statusCode;

    /**
     * 响应体
     *
     * @var string
     */
    public $body;

    /**
     * 流编码
     *
     * @var int
     */
    public $streamId;

    /**
     * 响应头
     *
     * @var array
     */
    public $header;
}
