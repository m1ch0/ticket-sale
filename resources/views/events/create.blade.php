@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Venue</div>
                    <div class="panel-body">

                        {!! Form::open(['action' => 'EventController@store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                            @include('events.form', ['submitButtonText' => '<i class="fa fa-plus-square" aria-hidden="true"></i> Add Event'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
