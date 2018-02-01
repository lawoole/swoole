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

    /**
     * 设置服务配置
     *
     * @param array $options
     */
    public function set($options)
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
     * 增加端口监听
     *
     * @param string $host
     * @param int $port
     * @param int $type
     *
     * @return \Swoole\Server\Port
     */
    public function listen($host, $port, $type)
    {
    }

    /**
     * 增加端口监听
     *
     * @param string $host
     * @param int $port
     * @param int $type
     *
     * @return \Swoole\Server\Port
     */
    public function addlistener($host, $port, $type)
    {
    }

    /**
     * 添加进程定义
     *
     * @since 1.7.9
     *
     * @param \Swoole\Process $process
     *
     * @return int 进程 ID
     */
    public function addProcess(Process $process)
    {
    }

    /**
     * 启动服务
     *
     * @return int|bool
     */
    public function start()
    {
    }

    /**
     * 向客户端发送数据
     *
     * @param int $fd
     * @param string $data
     * @param int $serverSocket
     *
     * @return bool
     */
    public function send($fd, $data, $serverSocket = -1)
    {
    }

    /**
     * 向指定客户端发送 Udp 数据包
     *
     * @param string $ip
     * @param int $port
     * @param string $data
     * @param int $serverSocket
     *
     * @return bool
     */
    public function sendto($ip, $port, $data, $serverSocket = -1)
    {
    }

    /**
     * 向客户端发送文件中的数据
     *
     * @param int $fd
     * @param string $filename
     * @param int $offset
     * @param int $length
     *
     * @return bool
     */
    public function sendfile($fd, $filename, $offset = 0, $length = 0)
    {
    }

    /**
     * 确认接入连接
     *
     * @param int $fd
     *
     * @return bool
     */
    public function confirm($fd)
    {
    }

    /**
     * 暂停数据接收
     *
     * @param int $fd
     *
     * @return bool
     */
    public function pause($fd)
    {
    }

    /**
     * 恢复数据接收
     *
     * @param int $fd
     *
     * @return bool
     */
    public function resume($fd)
    {
    }

    /**
     * 获得服务当前统计数据
     *
     * @return array
     */
    public function stats()
    {
    }

    /**
     * 重启所有工作进程
     *
     * @param bool $onlyTask 是否只重启任务工作进程
     *
     * @return bool
     */
    public function reload($onlyTask = false)
    {
    }

    /**
     * 检测服务器所有连接，并找出心跳超时的连接
     *
     * @param bool $close 是否自动关闭心跳超时连接
     *
     * @return array
     */
    public function heartbeat($close = false)
    {
    }

    /**
     * 投递任务，阻塞等待任务执行完成或超时
     *
     * @param mixed $data
     * @param float $timeout
     * @param int $dstWorkerId
     *
     * @return mixed
     */
    public function taskwait($data, $timeout = 0.5, $dstWorkerId = -1)
    {
    }

    /**
     * 同时投递多个任务，阻塞等待任务执行完成或超时
     *
     * @param array $tasks
     * @param float $timeout
     *
     * @return array
     */
    public function taskWaitMulti(array $tasks, $timeout = 0.5)
    {
    }

    /**
     * 推送任务
     *
     * @param mixed $data
     * @param int $dstWorkerId
     * @param callable $callback
     *
     * @return int
     */
    public function task($data, $dstWorkerId = -1, $callback = null)
    {
    }

    /**
     * 向指定进程发送消息
     *
     * @param mixed $data
     * @param int $dstWorkerId
     *
     * @return bool
     */
    public function sendMessage($data, $dstWorkerId)
    {
    }

    /**
     * 任务工作进程向关联的工作进程发送处理结果数据
     *
     * @param mixed $data
     */
    public function finish($data)
    {
    }

    /**
     * 为连接设置 UID
     *
     * @param int $fd
     * @param int $uid
     *
     * @return bool
     */
    public function bind($fd, $uid)
    {
    }

    /**
     * 获得 Socket 资源
     *
     * @param int $port
     *
     * @return resource
     */
    public function getSocket($port = 0)
    {
    }

    /**
     * 获得连接信息
     *
     * @param int $fd
     * @param int $fromId
     * @param bool $checkConnection
     *
     * @return array
     */
    public function connection_info($fd, $fromId = -1, $checkConnection = false)
    {
    }

    /**
     * 获得连接信息
     *
     * @param int $fd
     * @param int $fromId
     * @param bool $checkConnection
     *
     * @return array
     */
    public function getClientInfo($fd, $fromId = -1, $checkConnection = false)
    {
    }

    /**
     * 获得连接列表
     *
     * @param int $startFd
     * @param int $findCount
     *
     * @return array
     */
    public function connection_list($startFd = 0, $findCount = 10)
    {
    }

    /**
     * 获得连接列表
     *
     * @param int $startFd
     * @param int $findCount
     *
     * @return array
     */
    public function getClientList($startFd = 0, $findCount = 10)
    {
    }

    /**
     * 向客户端发送数据，阻塞等待发送完成
     *
     * @param int $fd
     * @param string $data
     *
     * @return bool
     */
    public function sendwait($fd, $data)
    {
    }

    /**
     * 判断连接是否存在
     *
     * @param int $fd
     *
     * @return bool
     */
    public function exist($fd)
    {
    }

    /**
     * 设置连接保护标记，避免被心跳检查关闭
     *
     * @param int $fd
     * @param bool $value
     *
     * @return bool
     */
    public function protect($fd, $value = true)
    {
    }

    /**
     * 停止服务
     *
     * @return bool
     */
    public function shutdown()
    {
    }

    /**
     * 停止工作进程
     *
     * @param int $workerId
     * @param bool $waitEvent
     *
     * @return bool
     */
    public function stop($workerId = -1, $waitEvent = false)
    {
    }

    /**
     * 获得最后产生的错误码
     *
     * @return int
     */
    public function getLastError()
    {
    }

    /**
     * 定义间隔定时器
     *
     * @param int $after 间隔时间，单位毫秒
     * @param callable $callback
     * @param array $params
     *
     * @return int
     */
    public function tick($interval, $callback, array $params = [])
    {
    }

    /**
     * 定义延迟定时器
     *
     * @param int $after 延迟时间，单位毫秒
     * @param callable $callback
     * @param array $params
     *
     * @return int
     */
    public function after($after, $callback, array $params = [])
    {
    }

    /**
     * 清除定时器
     *
     * @param int $timerId
     *
     * @return bool
     */
    public function clearTimer($timerId)
    {
    }

    /**
     * 事件当次循环结束后回调
     *
     * @param callable $callback
     *
     * @return bool
     */
    public function defer($callback)
    {
    }
}
