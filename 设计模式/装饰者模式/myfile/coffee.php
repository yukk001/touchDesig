<?php
class coffee extends drink {
private $name;

function __construct($name) {
$this->name = $name;
}

/// 这里就是指定了咖啡的名称
public function ShowDrink() {
echo("咖啡名称为：". $this->name );
}

} 