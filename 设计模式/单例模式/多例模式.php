<?php
/**
 * Created by PhpStorm.
 * User: yu
 * Date: 2017/12/10
 * Time: 10:17
 */
class modelsLots{
    public static $myselfarr;

    private function __construct()
    {
        //不允许实例化new
    }
    public static function getSelf($instanceName){
        if(!array_key_exists($instanceName,self::$myselfarr)){
            self::$myselfarr[$instanceName] = new self();
        }
        return self::$myselfarr[$instanceName];
    }

    private function __clone()
    {
        // 禁止克隆
    }
    private function __wakeup()
    {
        // 禁止调用
    }
}