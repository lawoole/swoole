<?php
namespace Swoole\WebSocket;

use Swoole\Http\Server as HttpServer;

/**
 * WebSocket 服务
 */
class Server extends HttpServer
{
    /**
     * 连接建立事件回调
     *
     * @var callable
     */
    public $onOpen;

    /**
     * 收到消息帧事件回调
     *
     * @var callable
     */
    public $onMessage;

    /**
     * 向连接推送数据
     *
     * @param int $fd
     * @param string $data
     * @param int $opcode
     * @param bool $finish
     *
     * @return bool
     */
    public function push($fd, $data, $opcode = WEBSOCKET_OPCODE_TEXT, $finish = true)
    {
    }

    /**
     * 打包 WebSocket 数据
     *
     * @param string $data
     * @param int $opcode
     * @param bool $finish
     * @param bool $mask
     *
     * @return string
     */
    public static function pack($data, $opcode = WEBSOCKET_OPCODE_TEXT, $finish = true, $mask = false)
    {
    }

    /**
     * 解包 WebSocket 数据
     *
     * @param string $data
     *
     * @return \Swoole\WebSocket\Frame
     */
    public static function unpack($data)
    {
    }

    /**
     * 判断 WebSocket 连接是否存在，并且状态为 Active
     *
     * @param int $fd
     *
     * @return bool
     */
    public function exist($fd)
    {
    }
}
