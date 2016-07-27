@extends('layouts.app')

@section('content')
    @foreach($venues as $venue)
        <div class="panel-body">
            <h2><a href="{{ action("VenueController@show", ['id' => $venue->id]) }}">{{$venue->name}}</a></h2>
            <hr>
        </div>
    @endforeach
@endsection