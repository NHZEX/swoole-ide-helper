<?php
function swoole_version(){}

function swoole_cpu_num(){}

function swoole_last_error(){}

/**
 * @param string $domain_name [required]
 * @param float $timeout [optional]
 * @return mixed
 */
function swoole_async_dns_lookup_coro(string $domain_name, float $timeout = null){}

/**
 * @param array $settings [required]
 * @return mixed
 */
function swoole_async_set(array $settings){}

/**
 * @param mixed $func [required]
 * @param array $params [optional]
 * @return mixed
 */
function swoole_coroutine_create(mixed $func, array $params = null){}

/**
 * @param string $command [required]
 * @return mixed
 */
function swoole_coroutine_exec(string $command){}

/**
 * @param mixed $callback [required]
 * @return mixed
 */
function swoole_coroutine_defer(mixed $callback){}

/**
 * @param mixed $func [required]
 * @param array $params [optional]
 * @return mixed
 */
function go(mixed $func, array $params = null){}

/**
 * @param mixed $callback [required]
 * @return mixed
 */
function defer(mixed $callback){}

/**
 * @param array $read_array [required]
 * @param array $write_array [required]
 * @param array $error_array [required]
 * @param float $timeout [optional]
 * @return mixed
 */
function swoole_client_select(array $read_array, array $write_array, array $error_array, float $timeout = null){}

/**
 * @param array $read_array [required]
 * @param array $write_array [required]
 * @param array $error_array [required]
 * @param float $timeout [optional]
 * @return mixed
 */
function swoole_select(array $read_array, array $write_array, array $error_array, float $timeout = null){}

/**
 * @param string $process_name [required]
 * @return mixed
 */
function swoole_set_process_name(string $process_name){}

function swoole_get_local_ip(){}

function swoole_get_local_mac(){}

/**
 * @param $errno [required]
 * @param $error_type [optional]
 * @return mixed
 */
function swoole_strerror($errno, $error_type = null){}

function swoole_errno(){}

/**
 * @param $data [required]
 * @param $type [optional]
 * @return mixed
 */
function swoole_hashcode($data, $type = null){}

/**
 * @param string $filename [required]
 * @return mixed
 */
function swoole_get_mime_type(string $filename){}

function swoole_clear_dns_cache(){}

function swoole_internal_call_user_shutdown_begin(){}

/**
 * @param int $fd [required]
 * @param $read_callback [required]
 * @param $write_callback [optional]
 * @param $events [optional]
 * @return mixed
 */
function swoole_event_add(int $fd, $read_callback, $write_callback = null, $events = null){}

/**
 * @param int $fd [required]
 * @return mixed
 */
function swoole_event_del(int $fd){}

/**
 * @param int $fd [required]
 * @param $read_callback [optional]
 * @param $write_callback [optional]
 * @param $events [optional]
 * @return mixed
 */
function swoole_event_set(int $fd, $read_callback = null, $write_callback = null, $events = null){}

/**
 * @param int $fd [required]
 * @param $events [optional]
 * @return mixed
 */
function swoole_event_isset(int $fd, $events = null){}

function swoole_event_dispatch(){}

/**
 * @param mixed $callback [required]
 * @return mixed
 */
function swoole_event_defer(mixed $callback){}

/**
 * @param mixed $callback [required]
 * @param $before [optional]
 * @return mixed
 */
function swoole_event_cycle(mixed $callback, $before = null){}

/**
 * @param int $fd [required]
 * @param $data [required]
 * @return mixed
 */
function swoole_event_write(int $fd, $data){}

function swoole_event_wait(){}

function swoole_event_exit(){}

/**
 * @param int $ms [required]
 * @param mixed $callback [required]
 * @return mixed
 */
function swoole_timer_after(int $ms, mixed $callback){}

/**
 * @param int $ms [required]
 * @param mixed $callback [required]
 * @return mixed
 */
function swoole_timer_tick(int $ms, mixed $callback){}

/**
 * @param int $timer_id [required]
 * @return mixed
 */
function swoole_timer_exists(int $timer_id){}

/**
 * @param int $timer_id [required]
 * @return mixed
 */
function swoole_timer_info(int $timer_id){}

function swoole_timer_stats(){}

function swoole_timer_list(){}

/**
 * @param int $timer_id [required]
 * @return mixed
 */
function swoole_timer_clear(int $timer_id){}

function swoole_timer_clear_all(){}

