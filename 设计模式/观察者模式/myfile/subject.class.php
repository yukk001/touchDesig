<?php
//主题接口
interface subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}