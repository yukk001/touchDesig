<?php

interface FileExporter
{
    /**
     * 写文件
     */
    public function writeFile($fileName,$data);

}


class XmlFile implements FileExporter
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

class CvsFile implements FileExporter
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



class MyTool{

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


$data = [
    ['date'=>'2011-04-21','wu'=>'test'],
    ['date'=>'2014-04-21','wu'=>'good'],
    ['date'=>'2011-12-22','wu'=>'great'],
    ['date'=>'2012-05-21','wu'=>'hahah'],
    ['date'=>'2013-08-13','wu'=>'test'],
    ['date'=>'2011-04-25','wu'=>'yes'],
    ['date'=>'2014-04-14','wu'=>'no'],
];

$tool=new MyTool();
$tool->setFileExporter( new XmlFile() );
$tool->export($data);

$tool->setFileExporter( new CvsFile() );
$tool->export($data);