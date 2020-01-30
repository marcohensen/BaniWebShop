@extends('layouts.app')
@section('content')
    <div class="ui vertical stripe quote segment">
        <div class="ui equal width stackable internally celled grid">
                @foreach($recepten->chunk(3) as $chunked_recepten)
                <div class="center aligned row">
                    @foreach($chunked_recepten as $recept)
                        <div class="column">
                            <h3>{{$recept->naam}}</h3>
                            <img src="{{asset('images/' . $recept->afbeelding)}}">
                            <p>{!! $recept->shortspec !!}</p>
                            <p>{!! $recept->ingredienten !!}</p>
                            <p>{!! $recept->beschrijving !!}</p>
                        </div>
                    @endforeach
                </div>
                @endforeach
            </div>
    </div>
@endsection