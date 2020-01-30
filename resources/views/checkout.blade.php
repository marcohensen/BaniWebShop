@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <div class="row">
        <div class="ui text container">
            <h1>Bestellen</h1>
            <h4>Totale prijs: €{{$total}}</h4>
            <div class="ui segments" style="border: none">
            <div class="ui horizontal segments">
                <div class="ui compact segment" style="width: 50px;background-color: white;">Naam:</div>
                <div class="ui compact segment" style="width: 400px;background-color: white;">{{Auth::user()->voornaam}} {{Auth::user()->tussenvoegsel}} {{Auth::user()->achternaam}}</div>
            </div>

            <h4>Geregistreerd Adres:</h4>
            <div class="ui horizontal segments">
                <div class="ui compact segment" style="width: 50px;background-color: white;">adres:</div>
                <div class="ui compact segment" style="width: 400px;background-color: white;">{{Auth::user()->adres}}</div>
            </div>
            <div class="ui horizontal segments">
                <div class="ui compact segment" style="width: 87px;background-color: white;">Plaats/postcode:</div>
                <div class="ui compact segment" style="width: 300px;background-color: white;">{{Auth::user()->plaats}}</div>
                <div class="ui compact segment" style="width: 50px;background-color: white;">{{Auth::user()->postcode}}</div>
            </div>
                <div class="ui horizontal segments">
                    <div class="ui compact segment" style="width: 50px;background-color: white;">Provincie:</div>
                    <div class="ui compact segment" style="width: 400px;background-color: white;">{{Auth::user()->provincie}}</div>
                </div>
            </div>
            <a class="ui right aligned button" href="{{route('user')}}">Wijzig adres</a>
            <br>
            <form action="{{ route('checkout') }}" method="post">
                {{ csrf_field() }}
                <button class="ui right aligned button" style="margin-top: 10px;" type="submit">Bevestig bestelling</button>
            </form>
        </div>
    </div>
@endsection