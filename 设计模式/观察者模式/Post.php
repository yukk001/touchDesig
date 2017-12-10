<?php
    


class Post implements SplSubject 
{
    protected $_userid = null;
    protected $_ip = null;
    protected $_content = null;

    protected $_observerlist = array();

    function __construct()
    {
        
    }

    public function attach(SplObserver  $observer)
    {
        $this->_observerlist[] = $observer;
    }

    public function detach(SplObserver  $observer)
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

class SendMail implements SplObServer{

    public function update(SplSubject $subject){
        echo (date ( 'Y-m-d H:i:s' ) . " success!\n");
    }

}

class SaveLog implements SplObServer{

    public function update(SplSubject $subject){
        echo (date ( 'Y-m-d H:i:s' ) . " loggggg!\n");
    }

}

$post= new Post();
$post->attach( new SendMail() );
$post->attach( new SaveLog() );
$post->addPost();



