<?php

namespace myinterface;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17-4-16
 * Time: 上午11:24
 */

class xmlFile implements FileExporter
{

    public function writeFile($fileName,$data)
    {
        $xml=$this->arrayToXml($data);
        file_put_contents($fileName.'.xml', $xml);
    }

    private function arrayToXml($arr)
    {
        $xml = '<xml version="1.0" standalone="yes">';
        foreach ($arr as $item) {
            $xml .= "\n <item>";
            foreach($item as $key => $val){
                $xml .="\n    <$key>$val</$key>";
            }
            $xml .="\n </item>";
        }
        $xml .= "\n</xml>";
        return $xml;
    }
}