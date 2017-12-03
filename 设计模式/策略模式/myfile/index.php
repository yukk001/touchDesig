<?php
namespace myinterface;

include_once("myTool.php");

spl_autoload_register(function ($class) {
    $class=substr($class,12);
    include  $class . '.class.php';
});

$data = [
    ['date'=>'2011-04-21','wu'=>'test'],
    ['date'=>'2014-04-21','wu'=>'good'],
    ['date'=>'2011-12-22','wu'=>'great'],
    ['date'=>'2012-05-21','wu'=>'hahah'],
    ['date'=>'2013-08-13','wu'=>'test'],
    ['date'=>'2011-04-25','wu'=>'yes'],
    ['date'=>'2014-04-14','wu'=>'no'],
];

$tool=new myTool();
$tool->setFileExporter( new xmlFile() );
$tool->export($data);

$tool->setFileExporter( new cvsFile() );
$tool->export($data);

$tool->setFileExporter( new jsonFile() );
$tool->export($data);