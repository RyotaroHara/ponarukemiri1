@extends('layouts.app')
@section('content')
@if(Auth::check())

<div class="battle_background" alt="otameshi" >

  <div class="container">
    <div class="Hp">
      <div class="col-sm-4">
        One of three columns
      </div>
      <div class="col-sm-4">
        One of three columns
      </div>
      <div class="col-sm-4">
        One of three columns
      </div>
    </div>
  </div>
  
  <?php
  print $_SERVER['REQUEST_URI'];
  ?>
    
  
  
    <div class="row align-items-end">
      <div class="col-sm-8" style="text-align:center;">
        One of three columns
      </div>
      <div class="col-sm-4">
        One of three columns
      </div>
    
    </div>
  

</div>



@endif
@endsection