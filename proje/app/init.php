<?php
    // helpers otomatik burada çağırılacak
    // class dosyalarını çağıralacak
    // veritabanı bağalntısı yapılcak
    //ayarlar kısmı yapılacak
    //-----------------------------------------

    // helper dosaya çekme işlemi
    spl_autoload_register(function($className){
        $classFile=realpath('.')."/app/classes/class.".strtolower($className).".php";
        if(file_exists($classFile)){
            require $classFile;
        }
    });
    Helper::Load();//app altındaki helper kalasörü çağırılır otomatik
    //--------------------------------------------
    //url link yapısı
    
    $link_home="anasayfa";
    $link_about="about";
    $link_contact="contact";
   
    

?>