<?php
class Adapter extends Power implements Target {
	//±äÑ¹¹ý³Ì  
    public function get110Power() {  
        return $this->get220Power() - 110;  
    }
}