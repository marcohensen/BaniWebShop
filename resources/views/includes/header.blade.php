<div class="ui fixed inverted menu" style="background-color: #ff490d; list-style-type: none; height: 25px">
    <div class="ui container">
        <img class="logo" src="{{asset('images/Bani.jpg.png')}}"
             style="height: 40px; width: 150px;border-radius: 10px 10px 10px 10px">
        <div class="center item">
            <a class="ui inverted button" id="nav" href="{{ route('/') }}">Home</a>
            <a class="ui inverted button" id="nav" href="{{ route('recepten') }}">Recepten</a>
            <a class="ui inverted button" id="nav" href="{{ route('categorie') }}">Producten</a>
            <a class="ui inverted button" id="nav" href="{{ route('/contact') }}">Contact & Informatie</a>
            <a class="ui inverted button" id="nav" href="{{ route('ShoppingCart') }}">Winkelwagen <span>({{ Session::has('cart') ? Session::get('cart')->totAantal : '' }})</span></a>
            @guest
                <li><a class="ui inverted button {{ request()->is('login') ? 'active' : '' }}"
                       href="{{ route('login') }}" id="nav">Inloggen</a>
                </li>
                @if (Route::has('register'))
                    <li class=><a class="ui inverted button {{ request()->is('register') ? 'active' : '' }}"
                                         href="{{ route('register') }}" id="nav">Registreren</a></li>
                @endif
            @else
                <li><a class="ui inverted button" href="/user" id="nav">{{ Auth::user()->voornaam . " " . Auth::user()->tussenvoegsel . " " . Auth::user()->achternaam }}</a></li>
                <li><a class="ui inverted button" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" id="nav">Uitloggen</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endguest
        </div>
    </div>
</div>