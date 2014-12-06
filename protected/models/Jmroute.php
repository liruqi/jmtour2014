<?php

class Jmroute
{
    public static $R1 = "台中线";
    public static $R2 = "花莲线";
    public static function path($wave) { 
        $w = intval (strrev($wave));
        return dirname(dirname(__FILE__)) . "/data/route{$w}.json";
    }

	public static function setRoute($wave, $oa, $r)
    {
        $rawdata = file_get_contents(self::path($wave));
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
        return file_put_contents(self::path($wave), json_encode($routemap));
    }

    public static function getRouteCount($wave)
    {
        $total = array("批次1"=>1000, "批次2"=>1000);
        $rawdata = file_get_contents(self::path($wave));
        $routemap = array(self::$R1=>array(), self::$R2=>array());
        if ($rawdata) {
            $routemap = json_decode($rawdata, TRUE);
        }
        return array(
            self::$R1 => $total[$wave] - count( $routemap[self::$R1]),
            self::$R2 => $total[$wave] - count( $routemap[self::$R2])
        );
	}
}
