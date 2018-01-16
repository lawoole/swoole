<?php
namespace Swoole\Http;

use Swoole\Server as BaseServer;

/**
 * Http 服务
 */
class Server extends BaseServer
{
    /**
     * 服务配置
     *
     * @var array
     */
    public $setting;

    /**
     * 收到请求事件回调
     *
     * @var callable
     */
    public $onRequest;

    /**
     * 握手事件回调
     *
     * @var callable
     */
    public $onHandshake;
}
