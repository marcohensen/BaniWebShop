@extends('layouts.app')
@section('content')
    <div class="ui vertical stripe segment">
        <div class="ui text container" >
            <h3 class="ui header">Contact</h3>
            <p>
                <img src="{{ asset('images/icons/location.png') }}" style="height: 40px; width: 40px;">
                Kappalaan 69-3, Kappaville
                <br>
                <img src="{{asset('images/icons/post.png')}}"style="height: 40px; width: 40px;">
                6969NL, Noord-Holland
                <br>
                <img src="{{ asset('images/icons/call.png') }}"style="height: 40px; width: 40px;">
                666-6969693
                <br>
                <img src="{{ asset('images/icons/email.png') }}"style="height: 40px; width: 40px;">
                mail@bani.nl
                </p>
            <h4 class="ui horizontal header divider">
            </h4>
            <h3 class="ui header">Over de Bani</h3>
            <p>
                Bent u op zoek naar een nieuwe plek om uw boodschappen te doen voor weinig geld? Bani is al sinds 1970 de goedkoopste buurtsuper
                van Nederland en wij bieden u nu ook de mogelijkheid aan om uw boodschappen aan huis te bezorgen. Op deze manier heeft u tijd voor
                andere zaken en hoeft u zich geen zorgen te maken over de boodschappen.
            </p>
        </div>
    </div>
@endsection