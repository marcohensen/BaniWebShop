@extends('layouts.app')
@section('content')
    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="six wide left floated column">
                    <img id="store" src={{asset('images/Bani_storefront.png')}}>
                </div>
                <div class="eight wide column">
                    <h3 class="ui header">We Help Companies and Companions</h3>
                    <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
                    <h3 class="ui header">We Make Bananas That Can Dance</h3>
                    <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>
                </div>
                <h3>Aanbiedingen</h3>
            </div>
            <div class="row">
                @foreach(App\Product::all() as $product)
                    @if($product['aanbieding'] != 0)
                        <div class="four wide column" id="product" style="margin-left: 30px;">
                            <img id="catImg" style="margin-top: 10px;" src="{{ asset('images/' . $product->afbeelding) }}">
                            <h4 id="catH4">{{ $product->naam }}</h4>
                            <p>
                                {!! $product->omschrijving !!}
                            </p>
                            <h4>Prijs: &euro;{{ $product->prijs }}</h4>

                            <a  class="CartButton"
                                type="button"  href="{{ route('product.addToCart', ['id' => $product->id]) }}">
                                <img src="{{ asset('images/shoppingCart.png') }}" style="width: 25px; height: 25px;"></a>
                        </div>
                    @endif
                    @endforeach
            </div>
        </div>
    </div>
@endsection