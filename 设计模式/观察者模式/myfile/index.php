<?php

spl_autoload_register(function($class){
    include $class.'.class.php';
});
$post= new Post();
$post->attach( new sendmail() );
$post->attach( new dothing() );
$post->addPost();