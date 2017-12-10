<?php
/**
 * Created by PhpStorm.
 * User: yue
 * Date: 2017/12/10
 * Time: 10:17
 */
class modelDan{
    public static $myself;
    private function __construct()
    {
        //不允许实例化new
    }
    public static function getSelf(){
        if(isset(self::$myself)){
            self::$myself = new static();
        }
        return self::$myself;
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