<?php
namespace Swoole;

/**
 * 锁实现
 */
class Lock
{
    /**
     * 锁类型：读写锁
     */
    const RWLOCK = SWOOLE_RWLOCK;

    /**
     * 锁类型：文件锁
     */
    const FILELOCK = SWOOLE_FILELOCK;

    /**
     * 锁类型：互斥锁
     */
    const MUTEX = SWOOLE_MUTEX;

    /**
     * 锁类型：信号量
     */
    const SEM = SWOOLE_SEM;

    /**
     * 锁类型：自旋锁
     */
    const SPINLOCK = SWOOLE_SPINLOCK;

    /**
     * 创建锁实现对象
     *
     * @param int $type 锁类型
     * @param string $file 文件锁对应的文件路径
     */
    public function __construct($type = self::MUTEX, $file = null)
    {
    }

    /**
     * 执行加锁。如果加锁时有其他进程持有这个锁，则会阻塞等待其释放锁
     *
     * @return bool 加锁成功为 true，加锁失败为 false
     */
    public function lock()
    {
    }

    /**
     * 执行加锁。如果锁正在被使用，则阻塞等待锁被释放或达到超时
     *
     * 注意：只有互斥锁支持此操作
     *
     * @param float $timeout
     *
     * @return bool 加锁成功为 true，加锁失败为 false
     */
    public function lockwait($timeout = 1.0)
    {
    }

    /**
     * 释放锁
     *
     * @return bool 释放成功为 true，释放失败为 false
     */
    public function unlock()
    {
    }

    /**
     * 执行加锁。如果加锁失败，立即返回，不会阻塞
     *
     * @return bool 加锁成功为 true，加锁失败为 false
     */
    public function trylock()
    {
    }

    /**
     * 增加读取锁。读取锁可被其他读取锁共享，但与读写锁不互斥
     *
     * @return bool 加锁成功为 true，加锁失败为 false
     */
    public function lock_read()
    {
    }

    /**
     * 增加读取锁。如果加锁失败，立即返回，不会阻塞
     *
     * @return bool 加锁成功为 true，加锁失败为 false
     */
    public function trylock_read()
    {
    }
}
