

@extends('layouts.app')

@section('content')

@if(Auth::check())

<div class="row">
  <div class="col-4 col-md-1">
        <div class=link change>
            @include('Exercise.tab.normal.tab_office')
            @include('Exercise.tab.normal.tab_way')
            @include('Exercise.tab.present location.P_tab_cafeteria')
        </div>
  </div>
  <div class="col-7 col-md-3">
        <div class=medium1 style="padding:10px;width:250px;height:570px;">
              <img class="card-img-top" src="{{ asset('images/top_office1.jpg') }}" alt="office" style="width:230px;">   
              <br>
                <div class=sample1>
                 @foreach ($menus as $menu)
                 <li><a href="{{ route('Menu', ['id' => $menu->id]) }}">{{$menu->exe_name}}</a></li>
                 @endforeach
                </div> 
        </div>
  </div>
  
  <div class="col-7 col-md-8">
        <div class=medium2 style="padding:10px;width:700px;height:570px;">
         
        </div>
  </div>
  
</div>    
@endif

   

@endsection

