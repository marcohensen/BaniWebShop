@extends('layouts.app2')
@section('content')
    @guest
        <section>
            <h1 id="catH4" style="margin-top: 100px;">
                Log in AUB
            </h1>
        </section>
    @else
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
                        <div class="column" id="toevoegen">
                            <div id="ProductenToevoegen">
                                <form>
                                    <input name="Productnaam" value="Productnaam"><br>
                                    <input name="Productomschrijving" value="Omschrijving product"><br>
                                    <input name="Productprijs" value="Prijs Product"><br>
                                </form>
                                <button type="submit" name="Toevoegen">Voeg toe</button>
                            </div>
                        </div>
                            <div class="column" id="toevoegen">
                            <div id="ReceptenToevoegen">
                                <form>
                                    <input name="Receptnaam" value="Receptnaam">
                                    <input name="Receptomschrijving" value="Recept omschrijving">
                                    <input name="Receptingredienten" value="Recept Ingredienten">
                                </form>
                                <button type="submit" name="Toevoegen">Voeg toe</button>
                            </div>
                            </div>
                        <div class="column" id="toevoegen">
                            <div id="Aanbiedingtoevoegen">
                                <form>
                                    <input name="AanbiedingProduct" value="Aanbieding product">
                                    <input name="AanbiedingPrijs" value="Prijs aanbieding">
                                </form>
                                <button type="submit" name="Toevoegen">Voeg toe</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        @endif
    @endguest
@endsection