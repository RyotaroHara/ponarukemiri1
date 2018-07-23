        <?php
        $way_active = "";
        $url = ($_SERVER["REQUEST_URI"]);
        if (preg_match('</place/office>',$url)) {$office_active= 'style="background:#FAADFF"';}
        if (preg_match('</place/way>',$url)) {$way_active= 'style="background:#FAADFF"';}
        if (preg_match('</place/cafeteria>',$url)) {$cafeteria_active= 'style="background:#FAADFF"';}
        
        //exerciseページ分//
        for ($i = 1; $i<6;$i++){
        if (preg_match('</Exercise/'.$i,$url)) {$cafeteria_active= 'style="background:#FAADFF"';}
        }for ($i = 6; $i<17;$i++){
        if (preg_match('</Exercise/'.$i,$url)) {$way_active= 'style="background:#FAADFF"';}
        }for ($i = 17; $i<22;$i++){
        if (preg_match('</Exercise/'.$i,$url)) {$office_active= 'style="background:#FAADFF"';}
        }
        ?>
<a href="{{ route('Place', ['name' => 'way']) }}" style="text-decoration:none;">
<div class="tab_box"<?php echo $way_active ?>>移動中</div>    
</a>