@extends('layouts.app')
@section('content')
    @if(count($products) != 0)
        <div class="row" id="Title"><h3>{{ $categorie }}</h3></div>
        <section>
            <div class="ui vertical stripe segment">
                <div class="ui middle aligned stackable grid container">
                    @foreach($products->chunk(2) as $chunked_categories)
                        <div class="row">
                            @foreach($products as $product)
                                <article class="six wide column" id="product" style="margin-left: 25px;">
                                    <img id="catImg" style="margin-top: 10px;" src="{{ asset('images/' . $product->afbeelding) }}">
                                    <h4 id="catH4">{{ $product->naam }}</h4>
                                    <p>
                                        {!! $product->omschrijving !!}
                                    </p>
                                    <h4>Prijs: &euro;{{ $product->prijs }}</h4>

                                        <a  class="CartButton"
                                                type="button"  href="{{ route('product.addToCart', ['id' => $product->id]) }}"><img src="{{ asset('images/shoppingCart.png') }}"
                                                                   style="width: 25px; height: 25px;"></a>
                                </article>

                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
            <br>
            <br>
        </section>
    @else
        <div class="ui text container" id="prodError">
            <div class="row" id="Title"><h1 id="prodH4">{{ $categorie }}</h1></div>
            <h2 class="ui inverted header" id="prodH4">
                Deze categorie heeft op dit moment helaas geen producten.
            </h2>
        </div>
    @endif
@endsection