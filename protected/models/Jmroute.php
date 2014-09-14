<?php

class Jmroute
{
    public static $R1 = "养生之旅";
    public static $R2 = "文化之旅";
    public static function path() { 
        return dirname(dirname(__FILE__)) . "/data/route.json";
    }

	public static function setRoute($oa, $r)
    {
        $rawdata = file_get_contents(self::path());
        $routemap = array(self::$R1=>array(), self::$R2=>array());
        if ($rawdata) {
            $routemap = json_decode($rawdata, TRUE);
        }
        foreach($routemap as $k => $v) {
            if ($r == $k) 
                $routemap[$k][$oa] = 1;
            else 
                unset ($routemap[$k][$oa]);
        }
        return file_put_contents(self::path(), json_encode($routemap));
    }

    public static function getRouteCount()
    {
        $total = array(self::$R1=>300, self::$R2=>100);
        $rawdata = file_get_contents(self::path());
        $routemap = array(self::$R1=>array(), self::$R2=>array());
        if ($rawdata) {
            $routemap = json_decode($rawdata, TRUE);
        }
        return array(
            self::$R1 => $total[self::$R1] - count( $routemap[self::$R1]),
            self::$R2 => $total[self::$R2] - count( $routemap[self::$R2])
        );
	}
}
