<?php
class Adapter extends Power implements Target {
	//��ѹ����  
    public function get110Power() {  
        return $this->get220Power() - 110;  
    }
}