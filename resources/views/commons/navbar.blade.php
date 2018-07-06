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
                <a class="navbar-left" href="/"><img src="{{ secure_asset("images/titled.png") }}" alt="OFFICE EXERCISE"></a>
            </div>
       
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                エクササイズ場所
                            <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                <li><a href="{{ route('Exercise.cafeteria') }}">カフェテリア</a></li>
                                <li><a href="{{ route('Exercise.way') }}">移動中</a></li>
                                <li><a href="{{ route('Exercise.office') }}">OFFICE</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                            フィットネス用品
                            <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                <li><a href="{{ route('fitnessgoods.ichiba') }}">楽天市場</a></li>
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
                    @else
                        <li><a href="{{ route('signup.get') }}">新規登録</a></li>
                        <li><a href="{{ route('login') }}">ログイン</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
       
       
       
     
