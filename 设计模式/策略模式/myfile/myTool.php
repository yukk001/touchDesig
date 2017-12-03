<?php
namespace myinterface;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17-4-16
 * Time: 上午11:26
 */

class myTool{

    private $fileName;
    private $exporter;

    public function __construct($fileName='default'){
        $this->fileName=$fileName;
    }

    public function setFileExporter(FileExporter $exporter){
        $this->exporter=$exporter;
    }

    public function export($data){
        $this->exporter->writeFile($this->fileName,$data);
        echo "done！";
    }


}