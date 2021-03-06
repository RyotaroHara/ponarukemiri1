<header>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-left" href="/"><img src="{{ secure_asset("images/logologo.png") }}" alt="OFFICE EXERCISE"></a>
            </div>
       
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
                                バトル
                            <span class="caret"></span>
                                <ul class="dropdown-menu">
                                <li><a href="{{ route('battle.menu', ['id' => Auth::user()->id]) }} ">バトル</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                エクササイズ場所
                            <span class="caret"></span>
                            
                                <ul class="dropdown-menu">
                                <li><a href="{{ route('Place', ['name' => 'office']) }}">オフィス</a></li>
                                <li><a href="{{ route('Place', ['name' => 'way']) }}">移動中</a></li>
                                <li><a href="{{ route('Place', ['name' => 'cafeteria']) }}">カフェテリア</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                            フィットネス用品
                            <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                <li><a href=https://www.rakuten.co.jp/category/200170/?l-id=top_normal_gmenu_d_sports_003>楽天市場</a></li>
                                </ul>
                            </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="gravatar">
                                    <img src="{{ Gravatar::src(Auth::user()->name, 20) . '&d=mm' }}" alt="" class="img-circle">
                                </span>
                                {{ Auth::user()->name }}
                                <span class="caret"></span>
                            </a>
                          
                            <ul class="dropdown-menu">
                                <li>
                <a href="{{ route('users.show', Auth::user()->id) }}">マイページ</a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('logout.get') }}">ログアウト</a>
                                </li>
                            </ul>
                        </li>
                    
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
       
       
       
     
