<?php
    
//主题接口
interface Subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}
//观察者接口
interface Observer {
    public function update(Subject $subject);
}


class Post implements Subject
{
    protected $_userid = null;
    protected $_ip = null;
    protected $_content = null;

    protected $_observerlist = array();

    function __construct()
    {
        
    }

    public function attach(Observer $observer)
    {
        $this->_observerlist[] = $observer;
    }

    public function detach(Observer $observer)
    {
        foreach ($this->_observerlist as $key => $value) {
            if ($observer === $value) {
                unset($this->_observerlist[$key]);
            }
        }
    }

    public function notify()
    {
        foreach ($this->_observerlist as $value) {
               $value->update($this); 
        }
    }

    public function addPost()
    {
         $this->notify();
         //do something else...
        
        //
    }
}

class SendMail implements Observer{

      public function update(Subject $subject){
           echo (date ( 'Y-m-d H:i:s' ) . " 发送邮件功\n");
      }

}

$post= new Post();
$post->attach( new SendMail() );
$post->addPost();