<?php

namespace RummyKhan\HelloWorld;

class HelloWorld
{
    public function sayHello()
    {
        echo get_class($this) . " >> sayHello >> Hello World \n";
    }

    public function getHello()
    {
        return get_class($this) . " >> getHello >> Hello World";
    }

    public function noHello()
    {
        return get_class($this) . " >> noHello >> Hello World";
    }

    // this is something
}