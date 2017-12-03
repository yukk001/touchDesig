<?php
class dothing implements Observer{
    public function update(Subject $subject){
        echo (date ( 'Y-m-d H:i:s' ) . " I had done something\n");
    }
}