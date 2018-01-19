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
 * 获得 CPU 核心数
 *
 * @return int
 */
function swoole_cpu_num()
{
}

/**
 * 进入 Select 事件循环
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
 * 定义延迟回调，调用会在当前事件循环结束时执行
 *
 * @param callable $callback
 *
 * @return bool
 */
function swoole_event_defer($callback)
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
