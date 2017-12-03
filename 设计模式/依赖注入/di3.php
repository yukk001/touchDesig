<?php
class Person{
   private $name;
   private $age;
   public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
	public function show(){
		echo  $this->name ,' : ', $this->age ;
	}
}
$localConfig = [
    'name'=>'zhangsan',
    'size'=>33,
    'age'=>244,
];
$reflector = new ReflectionClass('Person'); 
$constructor = $reflector->getConstructor();
$parameters = $constructor->getParameters();
foreach($parameters as $parameter){
        $name = $parameter->getName();
        $paras[$name] = $localConfig[$name];
}
$person = $reflector->newInstanceArgs($paras);
$person->show();

