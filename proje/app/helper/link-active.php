<?php
    /*view kalsörü altindaki static klasörünün içindeki header klasörü için yazılmıştır
      örneğin hangi sayfaya gittiğini bilen ona göre linklerin class kısmının aktif 
      diğer linklerin pasif edilmesi için kullanılır*/
    function link_active($deger){
        if($deger==url(0)){
            echo "active";
        }

    }
    /*view kalsörü altindaki static klasörünün içindeki header klasörü için yazılmıştır
       burada <head></head> arasındaki metalar yazılır başlıklar dinamik olarak eklemek istediğmiz her şey
       
       gönderilen değer urlden alınan ne ise onu switch yapısında döndürüp istenilen fonksiyonu
       çağırıp geriye döndermemeizi sağlar*/
    function link_meta_seo($deger){
        function meta_depart(){
            ?>
            <!--metalar buraya yazılır öönemli bölüm metaları-->
            <!-- örneğin= <title> title description 1</title>-->
            <?php
        }
        function meta_depart2(){
            ?>
            <!--metalar buraya yazılır öönemli bölüm metaları-->
            <!-- örneğin= <title> title description 2</title>-->
            <?php
        }
        
        
        switch($deger){
            case "#url content bilgi":return meta_depart();
            break;
            case "#url content bilgi":return meta_depart2();
            break;
        }
        

    }
    
?>