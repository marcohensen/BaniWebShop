<div class="ui fixed inverted menu" style="background-color: #ff490d; list-style-type: none; height: 25px">
    <div class="ui container">
        <img class="logo" src="{{asset('images/Bani.jpg.png')}}"
             style="height: 40px; width: 150px;border-radius: 10px 10px 10px 10px"><li style="color: yellow">Administrator</li>
        <a class="ui inverted button" id="nav" href="{{ route('admin') }}">Item Toevoegen</a>
        <a class="ui inverted button" id="nav" href="{{ route('aanpassen') }}">Item Aanpassen</a>
        <a class="ui inverted button" id="nav" href="{{ route('verwijderen') }}">Item Verwijderen</a>
        <div class="right item">
            @guest
                <li><a class="ui inverted button {{ request()->is('login') ? 'active' : '' }}"
                       href="{{ route('login') }}" id="nav">Inloggen</a>
                </li>
                @if (Route::has('register'))
                    <li class=><a class="ui inverted button {{ request()->is('register') ? 'active' : '' }}"
                                  href="{{ route('register') }}" id="nav">Registreren</a></li>
                @endif
            @else
                <li><a class="ui inverted button" href="/user" id="nav">{{ Auth::user()->voornaam . " " . Auth::user()->achternaam }}</a></li>
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