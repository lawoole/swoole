<?php

/**
 * 运行模式：基础模式
 */
const SWOOLE_BASE = 1;

/**
 * 运行模式：线程模式
 */
const SWOOLE_THREAD = 2;

/**
 * 运行模式：进程模式
 */
const SWOOLE_PROCESS = 3;


/**
 * Socket 类型：Tcp
 */
const SWOOLE_SOCK_TCP = 1;

/**
 * Socket 类型：Udp
 */
const SWOOLE_SOCK_UDP = 2;

/**
 * Socket 类型：TCP Ipv6
 */
const SWOOLE_SOCK_TCP6 = 3;

/**
 * Socket 类型：Udp Ipv6
 */
const SWOOLE_SOCK_UDP6 = 4;

/**
 * Socket 类型：Unix Dgram
 */
const SWOOLE_SOCK_UNIX_DGRAM = 5;

/**
 * Socket 类型：Unix Stream
 */
const SWOOLE_SOCK_UNIX_STREAM = 6;


/**
 * Socket 类型：Tcp
 */
const SWOOLE_TCP = SWOOLE_SOCK_TCP;

/**
 * Socket 类型：Udp
 */
const SWOOLE_UDP = SWOOLE_SOCK_UDP;

/**
 * Socket 类型：TCP Ipv6
 */
const SWOOLE_TCP6 = SWOOLE_SOCK_TCP6;

/**
 * Socket 类型：Udp Ipv6
 */
const SWOOLE_UDP6 = SWOOLE_SOCK_UDP6;

/**
 * Socket 类型：Unix Dgram
 */
const SWOOLE_UNIX_DGRAM = SWOOLE_SOCK_UNIX_DGRAM;

/**
 * Socket 类型：Unix Stream
 */
const SWOOLE_UNIX_STREAM = SWOOLE_SOCK_UNIX_STREAM;


/**
 * 锁类型：读写锁
 */
const SWOOLE_RWLOCK = 1;

/**
 * 锁类型：文件锁
 */
const SWOOLE_FILELOCK = 2;

/**
 * 锁类型：互斥锁
 */
const SWOOLE_MUTEX = 3;

/**
 * 锁类型：信号量
 */
const SWOOLE_SEM = 4;

/**
 * 锁类型：自旋锁
 */
const SWOOLE_SPINLOCK = 5;

