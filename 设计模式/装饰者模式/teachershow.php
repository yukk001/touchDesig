<?php

abstract class Drink {
    /// �ڳ�������ֻ������һ������ӿ�
    abstract  public function  ShowDrink();
}



class Coffee extends Drink {
    private $name;

    function __construct($name) {
        $this->name = $name;
    }

    /// �������ָ���˿��ȵ�����
    public function ShowDrink() {
        echo("��������Ϊ��". $this->name );
    }

}




abstract class DecoratorDrink  extends Drink {
    protected $drink;

    // ��װ�����б���Ҫ����һ�����ڶ��������
    function __construct($drink){
        $this->drink = $drink;
    }

    public function ShowDrink() {
        if ( null  != $this->drink ) {
            //ִ�б�װ����� ShowDrink
            $this->drink->ShowDrink();
        }
    }
}



//װ�����࣬����
class Sugar extends DecoratorDrink {

    /// ������չ���ȵĻ�������Ҫ���ڿ���������� ������ֱ�ӵ����˸���Ĺ��캯��
    function __construct($drink){
        parent::__construct($drink);
    }

    public function ShowDrink() {
        //���ȱ���Ҫ���ø���� ShowDrink
        parent::ShowDrink();
        //Ȼ������Ϳ�������¹�����
        echo(" ����   ");
    }

}



//װ�����࣬��ţ��
class Milk  extends DecoratorDrink {

    /// ������չ���ȵĻ�������Ҫ���ڿ���������� ������ֱ�ӵ����˸���Ĺ��캯��
    function __construct($drink){
        parent::__construct($drink);
    }

    public function ShowDrink() {
        //���ȱ���Ҫ���ø���� ShowDrink
        parent::ShowDrink();
        //Ȼ������Ϳ�������¹�����
        echo("  ����   ");
    }

}



//װ�����࣬�ӱ���
class Ice   extends DecoratorDrink {

    /// ������չ���ȵĻ�������Ҫ���ڿ���������� ������ֱ�ӵ����˸���Ĺ��캯��
    function __construct($drink){
        parent::__construct($drink);
    }

    public function ShowDrink() {
        //���ȱ���Ҫ���ø���� ShowDrink
        parent::ShowDrink();
        //Ȼ������Ϳ�������¹�����
        echo("  �ӱ�   ");
    }

}



//װ�����࣬����
class  Hot   extends DecoratorDrink {

    /// ������չ���ȵĻ�������Ҫ���ڿ���������� ������ֱ�ӵ����˸���Ĺ��캯��
    function __construct($drink){
        parent::__construct($drink);
    }

    public function ShowDrink() {
        //���ȱ���Ҫ���ø���� ShowDrink
        parent::ShowDrink();
        //Ȼ������Ϳ�������¹�����
        echo("  ����   ");
    }

}




//��������ʾЧ������

$coffee = new Coffee("����һ��");
$sugar = new Sugar($coffee); //�����ȼ��ǣ�Ҳ����ʹ������װ�ο���
$hot = new Hot($sugar); //�������ǵĿ��ȼ��ȣ�Ҳ����ʹ�ü�����װ�ο���
$hot->ShowDrink(); //��ʾ����ǰ���ȵ�״̬

echo "\n\n";

$coffee = new Coffee("���ȶ���");
$sugar = new Sugar($coffee);  //����
$milk = new Milk($sugar);  	   //����
$ice = new Ice($milk); 		   //�ӱ���
$ice->ShowDrink();