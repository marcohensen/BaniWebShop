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
                        <div class="column" id="verwijderen">
                            <form>
                                <select name="productVerwijderen">
                                    <option value="selecteer">Selecteer een product</option>
                                @foreach($producten as $itemP)
                                        <option value="{{$itemP->id}}">{{$itemP->naam}}</option>
                                @endforeach
                                </select>
                            </form>
                            <button class="ui button" type="submit">Verwijder Product</button>
                        </div>

                        <div class="column" id="verwijderen">
                            <form>
                                <select name="productVerwijderen">
                                    <option value="selecteer">Selecteer een product</option>
                                    @foreach($recepten as $itemP)
                                        <option value="{{$itemP->id}}">{{$itemP->naam}}</option>
                                    @endforeach
                                </select>
                            </form>
                            <button class="ui button" type="submit">Verwijder Recept</button>
                        </div>

                        <div class="column" id="verwijderen">
                            <form>
                                <select name="productVerwijderen">
                                    <option value="selecteer">Selecteer een product</option>
                                    @foreach($producten as $itemP)
                                        <option value="{{$itemP->id}}">{{$itemP->naam}}</option>
                                    @endforeach
                                </select>
                            </form>
                            <button class="ui button" type="submit">Verwijder Aanbieding</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endguest
@endsection