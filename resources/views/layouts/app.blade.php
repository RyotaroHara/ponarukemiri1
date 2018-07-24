<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OFFICE EXERCISE</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
         <link rel="stylesheet" href="{{ secure_asset('css/show.css') }}">
        <script src="{{ url('js/footerFixed.js') }}"></script>
    </head>
    
        <!-- URLによって表示する背景画像を変える-->
        <?php
        $change_image = "";
        $url = ($_SERVER["REQUEST_URI"]);
        if (preg_match('</battle/menu>',$url)) {$change_image = 'url(../images/office_battle.jpg)';}
        if (preg_match('</place>',$url)) {$change_image = 'url(../images/back2.jpg)';}
        if (preg_match('</Exercise>',$url)) {$change_image = 'url(../images/back2.jpg)';}
        //if (preg_match('</>',$url)) {$change_image = 'url(../images/TopMenu-01.png)';}
        ?>
    <body class="background" style="background-image: <?php echo $change_image ?>;">
        @include('commons.navbar')

        @yield('cover')

        <div class="container">
            @include('commons.error_messages')
            @yield('content')
        </div>

        @if (Auth::check())
        <div id=footer>
            @include('commons.footer')
        </div>
        @endif
    </body>
</html>
