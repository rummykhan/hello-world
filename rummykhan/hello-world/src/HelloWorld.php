<?php

namespace RummyKhan\HelloWorld;

class HelloWorld
{
    public function sayHello()
    {
        echo get_class($this) . " >> Hello World \n";
    }
}