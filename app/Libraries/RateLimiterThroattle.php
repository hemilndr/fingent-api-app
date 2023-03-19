<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;

class RateLimiterThroattle {
    protected $max_requests_per_minute;
    protected $cache_prefix;

    public function __construct($max_requests_per_minute = 10 , $cache_prefix = '_ip') 
    {
        $this->max_requests_per_minute = Config::get('apiconfig.max_requests_per_minute');// configuarable value of maximum req per min
        $this->cache_prefix = $cache_prefix;
    }
    /**
     * check numer of request for an IP within a minute
     * @param $ip
     * @return boolean
     */
    public function check($ip) 
    {
        $key = $this->cache_prefix . $ip;
        $count = Cache::get($key, 0);
        $count++;
        Cache::put($key, $count,60);// Cache the request count for 1 minute
        return $count <= $this->max_requests_per_minute;
    }
}
