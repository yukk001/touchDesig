<?php
//装饰者类，加热
class  orange   extends DecoratorDrink {

    /// 比如扩展咖啡的话，必须要存在咖啡这个对象 ，这里直接调用了父类的构造函数
    function __construct($drink){
        parent::__construct($drink);
    }

    public function ShowDrink() {
        //首先必须要调用父类的 ShowDrink
        parent::ShowDrink();
        //然后下面就可以添加新功能了
        echo("  橙汁   ");
    }

}