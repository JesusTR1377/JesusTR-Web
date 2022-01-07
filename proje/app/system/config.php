<?php

    // burası kısa yol yapımı
    define("dir",realpath('.'));
    define("controlPath",dir."/app/controller/");
    define("viewPath",dir."/app/view/");
    define("urlSite","http://".$_SERVER['SERVER_NAME'].'/');


?>