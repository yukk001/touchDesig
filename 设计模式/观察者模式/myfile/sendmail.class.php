<?php
class SendMail implements Observer{

    public function update(Subject $subject){
        echo (date ( 'Y-m-d H:i:s' ) . " 发送邮件功\n");
    }

}