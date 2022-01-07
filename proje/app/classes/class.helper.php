<?php

    class Helper {
        
        public static function Load(){
            $helpDir=realpath('.')."/app/helper";
            if($dh=opendir($helpDir)){
                while($file=readdir($dh)){
                    if(is_file($helpDir."/".$file)){
                        require $helpDir."/".$file;
                    }
                }
            }
        }

    }

?>