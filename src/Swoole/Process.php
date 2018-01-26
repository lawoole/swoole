<?php
namespace Swoole;

/**
 * 进程定义
 *
 * @since 1.7.2
 */
class Process
{
    /**
     * 进程通讯模式：无等待
     */
    const IPC_NOWAIT = 256;

    /**
     * 通讯管道标识符
     *
     * @var int
     */
    public $pipe;

    /**
     * 执行回调
     *
     * @var callable
     */
    public $callback;

    /**
     * 队列编号
     *
     * @var int
     */
    public $msgQueueId;

    /**
     * 队列 Key
     *
     * @var int
     */
    public $msgQueueKey;

    /**
     * 进程 PID
     *
     * @var int
     */
    public $pid;

    /**
     * 进程 ID
     *
     * @var int
     */
    public $id;

    /**
     * 创建进程对象
     *
     * @param callable $callback
     * @param bool $redirect
     * @param int $pipeType
     */
    public function __construct($callback, $redirect = false, $pipeType = 2)
    {
    }

    /**
     * 回收已结束的进程
     *
     * 注意：信号发生时可能同时有多个子进程退出，必须循环执行 wait 直到返回 false
     *
     * @param bool $blocking
     *
     * @return array|bool 成功回收为被回收进程的信息，没有进程可回收时为 false
     */
    public static function wait($blocking = true)
    {
    }

    /**
     * 设置信号监听回调
     *
     * @param int $signal
     * @param callable $callback
     *
     * @return bool
     */
    public static function signal($signal, $callback)
    {
    }

    /**
     * 设置定时信号
     *
     * 注意：定时器只触发信号，需要通过 signal 方法进行监听和处理
     *
     * @param int $interval 定时器间隔时间，单位为微秒。如果为负数表示清除定时器
     * @param int $type 定时器类型
     *     0 为真实时间，触发 SIGALAM 信号
     *     1 为用户态 CPU 时间，触发 SIGVTALAM 信号
     *     2 表示用户态 + 内核态时间，触发 SIGPROF 信号
     *
     * @return bool
     */
    public static function alarm($interval, $type = 0)
    {
    }

    /**
     * 结束进程
     *
     * @param int $pid
     * @param int $signal
     *
     * @return bool
     */
    public static function kill($pid, $signal = SIGTERM)
    {
    }

    /**
     * 使当前进程蜕变为守护进程
     *
     * @param bool $noChangeDir 是否不改变当前目录
     * @param bool $noClose 是否不关闭输入输出
     *
     * @return bool
     */
    public static function daemon($noChangeDir = true, $noClose = true)
    {
    }

    /**
     * 设置当前进程的 CPU 亲和性
     *
     * @since 1.7.18
     *
     * @param array $cpuSet
     *
     * @return bool
     */
    public static function setaffinity($cpuSet)
    {
    }

    /**
     * 设置进程间通讯管道超时
     *
     * @since 1.9.21
     *
     * @param float $timeout 超时，单位为秒。支持浮点数
     *
     * @return bool
     */
    public function setTimeout($timeout)
    {
    }

    /**
     * 启用队列进行进程间通讯
     *
     * @param int $msgkey
     * @param int $mode
     *
     * @return bool
     */
    public function useQueue($msgkey = 0, $mode = 2)
    {
    }

    /**
     * 查看进程间通讯队列状态
     *
     * @return array|bool
     */
    public function statQueue()
    {
    }

    /**
     * 清空进程间通讯队列
     *
     * @return bool
     */
    public function freeQueue()
    {
    }

    /**
     * 启动进程
     */
    public function start()
    {
    }

    /**
     * 从进程管道中读取数据
     *
     * @param int $bufferSize
     *
     * @return string
     */
    public function read($bufferSize = 8192)
    {
    }

    /**
     * 向进程管道中写入数据
     *
     * @param string $data
     *
     * @return int
     */
    public function write($data)
    {
    }

    /**
     * 关闭进程间通讯管道
     *
     * @param int $which
     *
     * @return bool
     */
    public function close($which = 0)
    {
    }

    /**
     * 向管道队列中推送数据
     *
     * @param string $data
     *
     * @return bool
     */
    public function push($data)
    {
    }

    /**
     * 从管道队列中拉取数据
     *
     * @param int $maxSize
     *
     * @return string
     */
    public function pop($maxSize = 65536)
    {
    }

    /**
     * 结束进程
     *
     * @param int $status 进程退出码
     */
    public function exit($status = 0)
    {
    }

    /**
     * 执行外部程序
     *
     * @param string $exec 可执行文件路径
     * @param array $args 执行参数
     *
     * @return bool
     */
    public function exec($exec, array $args)
    {
    }

    /**
     * 设置当前运行进程名
     *
     * 注意：这个方法只是 swoole_set_process_name 函数的别名，修改的并不是 Process
     *   定义的进程，而是当前程序运行进程的名称
     *
     * @param string $name
     * @param int $size
     */
    public function name($name, $size = 128)
    {
    }
}
