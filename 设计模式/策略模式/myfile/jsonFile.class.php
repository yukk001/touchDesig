<?php
namespace myinterface;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17-4-16
 * Time: 上午11:27
 */

class jsonFile implements FileExporter
{
    public function writeFile($fileName,$data)
    {

        $fh=fopen($fileName.'.json', 'w');
        foreach ($data as $key => $value) {
            fwrite($fh,json_encode($value));
        }
        fclose($fh);
    }
}