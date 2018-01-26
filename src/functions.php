<?php

/**
 * 获得 Swoole 版本号
 *
 * @return string
 */
function swoole_version()
{
}

/**
 * 获得最后产生的错误码
 */
function swoole_last_error()
{
}

/**
 * 获得 Cpu 核心数
 *
 * @return int
 */
function swoole_cpu_num()
{
}

/**
 * 获得本机 Ip 地址
 *
 * @return array
 */
function swoole_get_local_ip()
{
}

/**
 * 获得本机 Mac 地址
 *
 * @return array
 */
function swoole_get_local_mac()
{
}

/**
 * 进入事件选取
 *
 * @param array $read
 * @param array $write
 * @param array $error
 * @param float $timeout
 *
 * @return int
 */
function swoole_client_select(array &$read, array &$write, array &$error, $timeout = 0.5)
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
function swoole_timer_tick($interval, $callback, array $params = [])
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
function swoole_timer_after($after, $callback, array $params = [])
{
}

/**
 * 清除定时器
 *
 * @param int $timerId
 *
 * @return bool
 */
function swoole_timer_clear($timerId)
{
}

/**
 * 判断定时器是存在
 *
 * @param int $timerId
 *
 * @return bool
 */
function swoole_timer_exists($timerId)
{
}

/**
 * 加入事件监听
 *
 * @param int|resource $fd
 * @param callable $readCallback
 * @param callable $writeCallback
 * @param int $flags
 *
 * @return int
 */
function swoole_event_add($fd, $readCallback = null, $writeCallback = null, $flags = 0)
{
}

/**
 * 向流中写入数据
 *
 * @param int|resource $fd
 * @param string $data
 *
 * @return bool
 */
function swoole_event_write($fd, $data)
{
}

/**
 * 修改事件监听的回调
 *
 * @param int|resource $fd
 * @param callable $readCallback
 * @param callable $writeCallback
 * @param int $flags
 *
 * @return int
 */
function swoole_event_set($fd, $readCallback = null, $writeCallback = null, $flags = 0)
{
}

/**
 * 删除事件监听
 *
 * @param int|resource $fd
 *
 * @return bool
 */
function swoole_event_del($fd)
{
}

/**
 * 事件当次循环结束后回调
 *
 * @param callable $callback
 *
 * @return bool
 */
function swoole_event_defer($callback)
{
}

/**
 * 事件每次循环结束后回调
 *
 * @param callable $callback
 *
 * @return bool
 */
function swoole_event_cycle($callback)
{
}

/**
 * 退出事件循环
 */
function swoole_event_exit()
{
}

/**
 * 进入事件循环
 */
function swoole_event_wait()
{
}

/**
 * 设置当前运行进程名
 *
 * @param string $name
 * @param int $size
 */
function swoole_set_process_name($name, $size = 128)
{
}

/**
 * 获取最近一次系统调用的错误码
 *
 * @return int
 */
function swoole_errno()
{
}

/**
 * 将错误码转换成错误信息
 *
 * @param int $error
 *
 * @return string
 */
function swoole_strerror($error)
{
}
