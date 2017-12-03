<?php
spl_autoload_register(function($class){
    include $class.'.php';
});
//以下是演示效果代码

$coffee = new Coffee("咖啡一号");
$sugar = new Sugar($coffee); //给咖啡加糖，也就是使用糖来装饰咖啡
$hot = new Hot($sugar); //给加了糖的咖啡加热，也就是使用加热来装饰咖啡
$hot->ShowDrink(); //显示出当前咖啡的状态

echo "\n\n";

$coffee = new Coffee("咖啡二号");
$sugar = new Sugar($coffee);  //加糖
$milk = new Milk($sugar);  	   //加奶
$ice = new Ice($milk); 		   //加冰块
$ice->ShowDrink();
echo "\n\n";
$coffee = new Coffee("咖啡三号");
$ice = new ice($coffee);
$orange = new orange($ice);
$milk = new milk($orange);
$honey = new honey($milk);

$honey->ShowDrink();