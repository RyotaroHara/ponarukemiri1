        <?php
        $way_active = "";
        $url = ($_SERVER["REQUEST_URI"]);
        if (preg_match('</place/cafeteria>',$url)) {$cafeteria_active= 'style="background:#FAADFF"';}
        if (preg_match('</place/office>',$url)) {$office_active= 'style="background:#FAADFF"';}
        if (preg_match('</place/way>',$url)) {$way_active= 'style="background:#FAADFF"';}
        
        //exerciseページ分//
        
        for ($i = 22; $i>0;$i--){
            if($i<22 && 15<$i){
               if (preg_match("/Exercises\/$i/",$url)) {$way_active= 'style="background:#FAADFF"';break;}
            }
            elseif($i<17 && 5<$i){
               if (preg_match("/Exercises\/$i/",$url)) {$office_active= 'style="background:#FAADFF"';break;}
            }
            elseif ($i<6 && 0<$i){
               if (preg_match("/Exercises\/$i/",$url)) {$cafeteria_active= 'style="background:#FAADFF"';break;}
            }
        }
        ?>
<a href="{{ route('Place', ['name' => 'way']) }}" style="text-decoration:none;">
<div class="tab_box" <?php echo $way_active ?>>移動中</div>    
</a>