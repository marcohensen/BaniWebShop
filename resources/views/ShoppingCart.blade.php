@extends('layouts.app')
@section('content')
    @if(Session::has('cart'))
        <br>
        <br>
        <div class="row">
            <div class="ui text container">
            <ul style="list-style-type: none;">
                <div class="ui horizontal segments">
                    <div class="ui segment" style="width: 100px;background-color: white;">aantal</div>
                    <div class="ui segment" style="width: 500px;background-color: white;">product</div>
                    <div class="ui segment" style="width: 125px;background-color: white;">prijs</div>
                    <div class="ui segment" style="width: 125px;background-color: white;">actie</div>
                </div>
                @foreach($products as $product)
                    <li>
                        <div class="ui horizontal segments">
                            <div class="ui segment" style="width: 100px;background-color: white;"><span>{{ $product['aantal'] }}x</span></div>
                            <div class="ui segment" style="width: 500px;background-color: white;"><strong>{{ $product['items']['naam'] }}</strong></div>
                            <div class="ui segment" style="width: 125px;background-color: white;"><span>€{{ $product['prijs'] }}</span></div>
                            <div class="ui segment" style="width: 125px;background-color: white;">
                            <a type="button" href="{{ route('remove', ['id' => $product['items']['id']]) }}">verwijder product</a>
                            @if($product['aantal'] > 1)
                                <a type="button" href="{{route('reduce', ['id'=>$product['items']['id']])}}">Verwijder 1</a>
                                @endif
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        </div>
                <br><br><br>
        <div class="row">
            <div class="ui compact segment" style="background-color: white;"><strong>Totaal aantal producten: {{ $totAantal }}</strong><br></div>
            <div class="ui compact segment" style="background-color: white;"><strong>Totale prijs exc btw: €{{ $totPrijs }}</strong></div>
            <div class="ui compact segment" style="background-color: white;"><strong>Totale prijs inc btw: €{{$totBtw}}</strong></div>
        </div>
        <hr>
        <div class="row">
            <a href="{{ route('checkout') }}" type="button">Bestellen</a>
        </div>
    @else
        <div class="row">
            <h2>Geen producten in winkelwagen</h2>
        </div>
    @endif
@endsection