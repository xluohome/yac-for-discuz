<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: memory_driver_apc.php 27635 2012-02-08 06:38:31Z zhangguosheng $
 */
if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}

class memory_driver_apc {

    static $yac;

    public function init($config) {
        self::$yac = new Yac("dz_");
    }

    public function get($key) {
        return self::$yac->get(md5($key));
    }

    public function set($key, $value, $ttl = 0) {
        return self::$yac->set(md5($key), $value, $ttl);
    }

    public function rm($key) {
        return self::$yac->delete(md5($key));
    }

    public function clear() {
        return self::$yac->flush();
    }

}
