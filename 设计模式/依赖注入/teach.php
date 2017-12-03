<?php

class X {

}

class_alias('X','Y');//为一个类创建别名
class_alias('Y','Z');//为一个类创建别名
$z = new ReflectionClass('Z');
echo $z->getName(); // X