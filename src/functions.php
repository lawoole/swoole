<?php

/**
 * Return the Swoole version.
 *
 * @return string
 */
function swoole_version()
{
}

/**
 * Get latest error code.
 */
function swoole_last_error()
{
}

/**
 * Get the number of Cpu cores。
 *
 * @return int
 */
function swoole_cpu_num()
{
}

/**
 * Get the local Ip address.
 *
 * @return array
 */
function swoole_get_local_ip()
{
}

/**
 * Get the local Mac address.
 *
 * @return array
 */
function swoole_get_local_mac()
{
}

/**
 * Select event.
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
 * Create a interval timer.
 *
 * @param int $interval
 * @param callable $callback
 * @param array $params
 *
 * @return int
 */
function swoole_timer_tick($interval, $callback, array $params = [])
{
}

/**
 * Create a defer timer.
 *
 * @param int $after
 * @param callable $callback
 * @param array $params
 *
 * @return int
 */
function swoole_timer_after($after, $callback, array $params = [])
{
}

/**
 * Remove the timer.
 *
 * @param int $timerId
 *
 * @return bool
 */
function swoole_timer_clear($timerId)
{
}

/**
 * Return whether the timer exists.
 *
 * @param int $timerId
 *
 * @return bool
 */
function swoole_timer_exists($timerId)
{
}

/**
 * Add to event listening.
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
 * Write to stream.
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
 * Set the event's callbacks.
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
 * Remove the event listener.
 *
 * @param int|resource $fd
 *
 * @return bool
 */
function swoole_event_del($fd)
{
}

/**
 * Set the callback after current event loop.
 *
 * @param callable $callback
 *
 * @return bool
 */
function swoole_event_defer($callback)
{
}

/**
 * Set the callback after each event loop.
 *
 * @param callable $callback
 *
 * @return bool
 */
function swoole_event_cycle($callback)
{
}

/**
 * Exit the event loop.
 */
function swoole_event_exit()
{
}

/**
 * Enter the event loop.
 */
function swoole_event_wait()
{
}

/**
 * Set the current running process name.
 *
 * @param string $name
 * @param int $size
 */
function swoole_set_process_name($name, $size = 128)
{
}

/**
 * Get the error code of the most recent system call.
 *
 * @return int
 */
function swoole_errno()
{
}

/**
 * Convert error code to error message.
 *
 * @param int $error
 *
 * @return string
 */
function swoole_strerror($error)
{
}
