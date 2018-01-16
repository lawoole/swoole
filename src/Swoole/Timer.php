<?php
namespace Swoole;

/**
 * 定时器
 */
class Timer
{
    /**
     * 定义间隔定时器
     *
     * @param int $after 间隔时间，单位毫秒
     * @param callable $callback
     * @param array $params
     *
     * @return int
     */
    public static function tick($interval, $callback, array $params = [])
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
    public static function after($after, $callback, array $params = [])
    {
    }

    /**
     * 清除定时器
     *
     * @param int $timerId
     *
     * @return bool
     */
    public static function clear($timerId)
    {
    }

    /**
     * 判断定时器是存在
     *
     * @param int $timerId
     *
     * @return bool
     */
    public static function exists($timerId)
    {
    }
}
