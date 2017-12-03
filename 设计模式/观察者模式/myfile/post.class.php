<?php
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