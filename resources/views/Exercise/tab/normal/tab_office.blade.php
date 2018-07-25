        <?php
        $office_active = "";
        $url = ($_SERVER["REQUEST_URI"]);
        if (preg_match('</place/cafeteria>',$url)) {$cafeteria_active= 'style="background:#C1C2E9"';}
        if (preg_match('</place/office>',$url)) {$office_active= 'style="background:#C1C2E9"';}
        if (preg_match('</place/way>',$url)) {$way_active= 'style="background:#C1C2E9"';}
        
        //exerciseページ分//
        for ($i = 22; $i>0;$i--){
            if($i<22 && 15<$i){
               if (preg_match("/Exercises\/$i/",$url)) {$way_active= 'style="background:#C1C2E9"';break;}
            }
            elseif($i<17 && 5<$i){
               if (preg_match("/Exercises\/$i/",$url)) {$office_active= 'style="background:#C1C2E9"';break;}
            }
            elseif ($i<6 && 0<$i){
               if (preg_match("/Exercises\/$i/",$url)) {$cafeteria_active= 'style="background:#C1C2E9"';break;}
            }
        }
        ?>
<a href="{{ route('Place', ['name' => 'office']) }}" style="text-decoration:none;">
<div class="tab_box" <?php echo $office_active ?>>オフィス</div>    
</a>