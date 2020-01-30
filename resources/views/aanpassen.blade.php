@extends('layouts.app2')
@section('content')
    @guest
        <section>
            <h1 id="catH4" style="margin-top: 100px;">
                Log in AUB
            </h1>
        </section>
    @endguest
    @auth
        @if(Auth::user()->rol == 0)
            <section>
                <h1 id="catH4" style="margin-top: 100px;">
                    U heeft geen bevoegheid voor deze pagina
                </h1>
            </section>
        @else
            <div class="ui vertical stripe quote segment">
                <div class="ui equal width stackable internally celled grid" style="margin-top: 50px;">
                    <div class="row" style="margin-top: 4px;">
                        <div class="column" id="aanpassen">
                            <div id="ProductenAanpassen">
                                <form class="ui form @if(count( $errors ) > 0) error @endif" method="post" action="{{ route('aanpassen.update') }}">
                                    @csrf
                                    @if(count( $errors ) > 0)
                                        <div class="ui error message">
                                            <div class="header">Er is iets fout gegaan</div>
                                            <ul class="list">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <select class="aanbieding" name="Productid">
                                        <option class="aanbieding" value="selecteer">Selecteer een product</option>
                                        @foreach($producten as $itemP)
                                            <option class="aanbieding" value="{{$itemP->id}}">{{$itemP->naam}}</option>
                                        @endforeach
                                    </select>
                                    <input class="producten" name="Productnaam" value="Productnaam"><br>
                                    <input class="producten" name="Productcategorie" value="Productcategorie"><br>
                                    <input class="producten" name="Productbtw" value="Product btw"><br>
                                    <input class="producten" name="Productafbeelding" value="Product afbeelding"><br>
                                    <input class="producten" name="Productomschrijving" value="Omschrijving product"><br>
                                    <input class="producten" name="Productprijs" value="Prijs Product"><br>
                                    <button type="submit">Pas product aan</button>
                                </form>

                            </div>
                        </div>
                        <div class="column" id="aanpassen">
                            <div id="ReceptenAanpassen">
                                <form class="ui form @if(count( $errors ) > 0) error @endif" method="post" action="{{ route('aanpassen.update') }}">
                                    @csrf
                                    @if(count( $errors ) > 0)
                                        <div class="ui error message">
                                            <div class="header">Er is iets fout gegaan</div>
                                            <ul class="list">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <select class="aanbieding" name="Receptid">
                                        <option class="aanbieding" value="selecteer">Selecteer een product</option>
                                        @foreach($recepten as $itemP)
                                            <option class="aanbieding" value="{{$itemP->id}}">{{$itemP->naam}}</option>
                                        @endforeach
                                    </select>
                                    <input class="recepten" name="Receptnaam" value="Receptnaam">
                                    <input class="recepten" name="Receptomschrijving" value="Recept omschrijving">
                                    <input class="recepten" name="Receptshortspec" value="Recept omschrijving">
                                    <input class="recepten" name="Receptingredienten" value="Recept Ingredienten">
                                </form>
                                <button type="submit" name="Aanpassen">Pas recept aan</button>
                            </div>
                        </div>
                        <div class="column" id="aanpassen">
                            <div id="AanbiedingAanpassen">
                                <form class="ui form @if(count( $errors ) > 0) error @endif" method="post" action="{{ route('aanpassen.update') }}">
                                    @csrf
                                    @if(count( $errors ) > 0)
                                        <div class="ui error message">
                                            <div class="header">Er is iets fout gegaan</div>
                                            <ul class="list">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                        <select class="aanbieding" name="Aanbiedingid">
                                            <option class="aanbieding" value="selecteer">Selecteer een product</option>
                                            @foreach($producten as $itemP)
                                                <option class="aanbieding" value="{{$itemP->id}}">{{$itemP->naam}}</option>
                                            @endforeach
                                        </select>
                                    <input class="aanbieding" name="AanbiedingPrijs" value="Prijs aanbieding">
                                    <input class="aanbieding" type="checkbox" name="Aanbiedingstatus">Aanbieding loopt
                                <button class="ui button" type="submit">Pas aanbieding aan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endauth
@endsection