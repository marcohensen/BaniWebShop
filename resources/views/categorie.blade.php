@extends('layouts.app')
@section('content')
    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            @foreach($categorie->chunk(1) as $chunked_categories)
                <div class="row">
                    @foreach($chunked_categories as $categorie)
                        <div class="four wide right floated column">
                            <a href="{{ route('categorie') }}/{{ $categorie->subnaam1 }}">
                            <article id="category">
                                <img src="{{ asset('images/' . $categorie->subafbeelding1) }}" id="catImg">
                                <h3 id="catH4">{{ $categorie->subnaam1 }}</h3>
                            </article>
                            </a>
                        </div>
                        <div class="four wide right floated column">
                            <a href="{{ route('categorie') }}/{{ $categorie->subnaam2 }}">
                                <article id="category">
                                    <img src="{{ asset('images/' . $categorie->subafbeelding2) }}" id="catImg">
                                    <h3 id="catH4">{{ $categorie->subnaam2 }}</h3>
                                </article>
                            </a>
                        </div>
                        <div class="four wide right floated column">
                            <a href="{{ route('categorie') }}/{{ $categorie->subnaam3 }}">
                                <article id="category">
                                    <img src="{{ asset('images/' . $categorie->subafbeelding3) }}" id="catImg">
                                    <h3 id="catH4">{{ $categorie->subnaam3 }}</h3>
                                </article>
                            </a>
                        </div>
                    @endforeach
                </div>
                @endforeach
        </div>
    </div>
@endsection