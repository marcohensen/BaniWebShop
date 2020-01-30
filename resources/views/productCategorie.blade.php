@extends('layouts.app')
@section('content')
    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            @foreach($prodCategories->chunk(5) as $chunked_categories)
                <div class="row">
                    @foreach($chunked_categories as $categorie)
                            <div class="four wide right floated column">
                                <a href="{{ route('welcome') }}/categorie/{{ $categorie->subnaam1 }}">
                                <article id="category">
                                    <img src="{{ asset('images/' . $categorie->subafbeelding1) }}" id="catImg">
                                    <h4 id="catH4">{{ $categorie->subnaam1 }}</h4>
                                </article>
                                </a>
                            </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection