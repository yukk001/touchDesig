<?php
namespace myinterface;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17-4-16
 * Time: 上午11:25
 */
class cvsFile implements FileExporter
{
    public function writeFile($fileName,$data)
    {

        $fh=fopen($fileName.'.csv', 'w');
        foreach ($data as $key => $value) {
            fputcsv($fh, $value);
        }
        fclose($fh);
    }
}
