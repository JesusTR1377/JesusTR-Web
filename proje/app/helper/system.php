<?php
    #controller klasörü url dosya yapısı 
    function controller($name){
        return controlPath.$name.".php";
    }
    #view klasörü url dosya yapısı 
    function view($name){
        return viewPath.$name.".php";
    }
?>