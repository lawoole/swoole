<?php

/**
 * Swoole 版本号
 */
const SWOOLE_VERSION = '1.10.0';


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
 * 信号：
 */
const SIGHUP = 1;

/**
 * 信号：
 */
const SIGINT = 2;

/**
 * 信号：
 */
const SIGQUIT = 3;

/**
 * 信号：
 */
const SIGILL = 4;

/**
 * 信号：
 */
const SIGTRAP = 5;

/**
 * 信号：
 */
const SIGABRT = 6;

/**
 * 信号：
 */
const SIGBUS = 7;

/**
 * 信号：
 */
const SIGFPE = 8;

/**
 * 信号：
 */
const SIGKILL = 9;

/**
 * 信号：
 */
const SIGUSR1 = 10;

/**
 * 信号：
 */
const SIGSEGV = 11;

/**
 * 信号：
 */
const SIGUSR2 = 12;

/**
 * 信号：
 */
const SIGPIPE = 13;

/**
 * 信号：
 */
const SIGALRM = 14;

/**
 * 信号：
 */
const SIGTERM = 15;

/**
 * 信号：
 */
const SIGSTKFLT = 16;

/**
 * 信号：
 */
const SIGCHLD = 17;

/**
 * 信号：
 */
const SIGCONT = 18;

/**
 * 信号：
 */
const SIGSTOP = 19;

/**
 * 信号：
 */
const SIGTSTP = 20;

/**
 * 信号：
 */
const SIGTTIN = 21;

/**
 * 信号：
 */
const SIGTTOU = 22;

/**
 * 信号：
 */
const SIGURG = 23;

/**
 * 信号：
 */
const SIGXCPU = 24;

/**
 * 信号：
 */
const SIGXFSZ = 25;

/**
 * 信号：
 */
const SIGVTALRM = 26;

/**
 * 信号：
 */
const SIGPROF = 27;

/**
 * 信号：
 */
const SIGWINCH = 28;

/**
 * 信号：
 */
const SIGIO = 29;

/**
 * 信号：
 */
const SIGPWR = 30;

/**
 * 信号：
 */
const SIGSYS = 31;


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

/**
 * 序列化参数：快速打包（不保留数组 Key）
 */
const SWOOLE_FAST_PACK = 1;

/**
 * 反序列化参数：解析对象为数组
 */
const UNSERIALIZE_OBJECT_TO_ARRAY = 1;

/**
 * 反序列化参数：解析对象为标准对象
 */
const UNSERIALIZE_OBJECT_TO_STDCLASS = 2;
