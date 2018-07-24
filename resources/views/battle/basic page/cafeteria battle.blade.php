


@extends('layouts.app')

@section('content')

@if(Auth::check())
    <div class="container">
  <div class="row">
    <div class="col-lg-4">
      1 of 2
      <?php
     print $user->year;
     $weight = '$user->Weght';
     print $weight;
     print $user->created_at;
     print "a";
     $cal = DB::table('battles')->where('user_id',"$user->id")->where('id',"1")->value('cal');
     print $cal;
     $finish = strtotime("{$user->year}-{$user->month}-{$user->day}");
     $start = strtotime("{$user->created_at}");
     echo $finish;
     $all_cal = 0;
        for ($i=1; $i<200; $i++) {
    

    $cal = DB::table('battles')->where('user_id',"$user->id")->where('id',"$i")->value('cal');
    $num = DB::table('battles')->where('user_id',"$user->id")->where('id',"$i")->value('num');
    $all_cal += $cal*$num;
}
$nokori_cal = floor((("{$user->Weight}"-"{$user->IdealWeight}")*7200)-$all_cal);
$weight_sa = "{$user->Weight}"-"{$user->IdealWeight}";
print $weight_sa."kg減量まであと".$nokori_cal."kcalだよ";
     ?>
     <body>


    </div>
    <div class="col-lg-4">
    
    </div>
</form>
</body>
</html>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-5" style="margin-top:360px;padding:10px; width:400px; height:220px; background-color:skyblue;">
      
     
      
      
    </div>
    <div class="col-lg-5" style="margin-top:360px;margin-left:10px;padding:10px; width:700px; height:220px; background-color:blue;">
      2 of 3
    </div>
    
  </div>
</div>

@endif

@endsection

