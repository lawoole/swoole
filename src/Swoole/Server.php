<?php
namespace Swoole;

/**
 * 服务
 */
class Server
{
    /**
     * 服务配置
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
     * 运行模式
     *
     * @var int
     */
    public $mode;

    /**
     * 端口集合
     *
     * @var \Swoole\Server\Port[]
     */
    public $ports;

    /**
     * 主进程 PID
     *
     * @var int
     */
    public $master_pid;

    /**
     * 管理进程 PID
     *
     * @var int
     */
    public $manager_pid;

    /**
     * 工作进程 ID
     *
     * @var int
     */
    public $worker_id;

    /**
     * 是否为任务工作进程
     *
     * @var bool
     */
    public $taskworker;

    /**
     * 工作进程 PID
     *
     * @var int
     */
    public $worker_pid;

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
     * 服务启动事件回调
     *
     * @var callable
     */
    public $onStart;

    /**
     * 服务停止事件回调
     *
     * @var callable
     */
    public $onShutdown;

    /**
     * 工作进程启动事件回调
     *
     * @var callable
     */
    public $onWorkerStart;

    /**
     * 工作进程停止事件回调
     *
     * @var callable
     */
    public $onWorkerStop;

    /**
     * 工作进程退出事件回调
     *
     * @var callable
     */
    public $onWorkerExit;

    /**
     * 工作进程异常退出事件回调
     *
     * @var callable
     */
    public $onWorkerError;

    /**
     * 任务执行事件回调
     *
     * @var callable
     */
    public $onTask;

    /**
     * 任务完成事件回调
     *
     * @var callable
     */
    public $onFinish;

    /**
     * 管理进程启动事件回调
     *
     * @var callable
     */
    public $onManagerStart;

    /**
     * 管理进程停止事件回调
     *
     * @var callable
     */
    public $onManagerStop;

    /**
     * 管道消息事件回调
     *
     * @var callable
     */
    public $onPipeMessage;

    /**
     * 创建服务对象
     *
     * @param string $host
     * @param int $port
     * @param int $mode 运行模式
     * @param int $sockType Socket 类型
     */
    public function __construct($host, $port = 0, $mode = SWOOLE_PROCESS, $sockType = SWOOLE_TCP)
    {
    }
}