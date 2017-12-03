<?php



abstract class decoratorDrink  extends drink {
    protected $drink;

    // 在装饰类中必须要保存一个对于对象的引用
    function __construct($drink){
        $this->drink = $drink;
    }

    public function ShowDrink() {
        if ( null  != $this->drink ) {
            //执行被装饰类的 ShowDrink
            $this->drink->ShowDrink();
        }
    }
}