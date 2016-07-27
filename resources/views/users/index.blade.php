@extends('layouts.app')

@section('content')
    @foreach($users as $user)
        <div class="panel-body">
            <h3><a href="{{ action("UserController@show", ['id' => $user->id]) }}">{{$user->name}}</a></h3>
            <hr>
        </div>
    @endforeach
@endsection