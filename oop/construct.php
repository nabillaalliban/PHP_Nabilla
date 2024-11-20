<?php

  class kucing{

    public function __construct()
    {
       echo "Hallo Saya Kucing<br>"; 
    }

    public function  makan(){
        echo "Kucing Suka Wiskhas<br>";
    }
        
    public function minum(){
        echo "Kucing Suka Minum";
    }
    
    public function __destruct()
    {
        echo "Suara Kucing * miauuuuu ngekk";
    }
    }

    $makhluk = new kucing();

  


?>