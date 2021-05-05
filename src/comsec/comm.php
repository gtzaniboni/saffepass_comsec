<?php

namespace Saffepass\comsec;

class io
{
    private $k1="0";
    private $k2="0";
    private $k3="0";
    private $ac=0;

    public function init($nk1, $nk2, $nk3)
    {
        $k1 = $nk1;
        $k2 = $nk2;
        $k3 = $nk3; 
        $ac = 1;
        return "init [OK]";
    }

    public function initfromfile($file)
    {
        $k1 = "1";
        $k2 = "2";
        $k3 = "3"; 
        $ac = 1;
        return "init From File [OK]";
    }

    public function send($msg = "Hello World")
    {
        return "send: $msg<BR>[$k1]<BR>[$k2]<BR>[$k3]";
    }
    public function rec($msg = "Hello World")
    {
        return "rec: $msg";
    }
    public function seal($msg = "Hello World")
    {
        return "seal: $msg";
    }
}

?>