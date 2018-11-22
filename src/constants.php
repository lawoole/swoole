<?php

/**
 * The Swoole version
 */
const SWOOLE_VERSION = '1.10.0';


/**
 * Server run mode : Base
 */
const SWOOLE_BASE = 1;

/**
 * Server run mode : Thread
 */
const SWOOLE_THREAD = 2;

/**
 * Server run mode : Process
 */
const SWOOLE_PROCESS = 3;


/**
 * Socket type : Tcp
 */
const SWOOLE_SOCK_TCP = 1;
const SWOOLE_TCP = SWOOLE_SOCK_TCP;

/**
 * Socket type : Udp
 */
const SWOOLE_SOCK_UDP = 2;
const SWOOLE_UDP = SWOOLE_SOCK_UDP;

/**
 * Socket type : TCP with Ipv6
 */
const SWOOLE_SOCK_TCP6 = 3;
const SWOOLE_TCP6 = SWOOLE_SOCK_TCP6;

/**
 * Socket type : Udp with Ipv6
 */
const SWOOLE_SOCK_UDP6 = 4;
const SWOOLE_UDP6 = SWOOLE_SOCK_UDP6;

/**
 * Socket type : Unix Dgram
 */
const SWOOLE_SOCK_UNIX_DGRAM = 5;
const SWOOLE_UNIX_DGRAM = SWOOLE_SOCK_UNIX_DGRAM;

/**
 * Socket type : Unix Stream
 */
const SWOOLE_SOCK_UNIX_STREAM = 6;
const SWOOLE_UNIX_STREAM = SWOOLE_SOCK_UNIX_STREAM;

/**
 * Use SSL
 */
const SWOOLE_SSL = 1 << 9;

/**
 * Connection Keep Alive
 */
const SWOOLE_KEEP = 1 << 12;


/**
 * Socket mode : Async
 */
const SWOOLE_SOCK_ASYNC = 1 << 10;
const SWOOLE_ASYNC = SWOOLE_SOCK_ASYNC;

/**
 * Socket mode : Sync
 */
const SWOOLE_SOCK_SYNC = 1 << 11;
const SWOOLE_SYNC = SWOOLE_SOCK_SYNC;

/**
 * Event type : Read
 */
const SWOOLE_EVENT_READ = 512;

/**
 * Event type : Write
 */
const SWOOLE_EVENT_WRITE = 1024;


/**
 * WebSocket operate code : Text
 */
const WEBSOCKET_OPCODE_TEXT = 1;

/**
 * WebSocket operate code : Binary
 */
const WEBSOCKET_OPCODE_BINARY = 2;

/**
 * WebSocket operate code : Ping
 */
const WEBSOCKET_OPCODE_PING = 9;


/**
 * WebSocket status : Connecting
 */
const WEBSOCKET_STATUS_CONNECTION = 1;

/**
 * WebSocket status : Handshaking
 */
const WEBSOCKET_STATUS_HANDSHAKE = 2;

/**
 * WebSocket status : Frame received
 */
const WEBSOCKET_STATUS_FRAME = 3;

/**
 * WebSocket status : Active
 */
const WEBSOCKET_STATUS_ACTIVE = 3;


/**
 * Lock type : Read and write
 */
const SWOOLE_RWLOCK = 1;

/**
 * Lock type : File
 */
const SWOOLE_FILELOCK = 2;

/**
 * Lock type : Mutex
 */
const SWOOLE_MUTEX = 3;

/**
 * Lock type : Semaphore
 */
const SWOOLE_SEM = 4;

/**
 * Lock type : Spin
 */
const SWOOLE_SPINLOCK = 5;

/**
 * Serialize : Fast pack ( Remove all keys in array )
 */
const SWOOLE_FAST_PACK = 1;

/**
 * Serialize : Decode object as array
 */
const UNSERIALIZE_OBJECT_TO_ARRAY = 1;

/**
 * Serialize : Decode object as object
 */
const UNSERIALIZE_OBJECT_TO_STDCLASS = 2;
