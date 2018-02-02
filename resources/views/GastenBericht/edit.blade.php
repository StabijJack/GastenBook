@extends('layouts.master') 
@section('content') 
<h2> Edit GastenBericht</h2>
{!! Form::model($gastenBericht, ['method'=> 'PATCH','action' => ['GastenBerichtController@update', 'GastenBericht'=>$gastenBericht->id] ,'files'=> true]) !!}
    @include('GastenBericht.formfields')
    <div class="form-group">
        <img src="{{$gastenBericht->foto }}" alt="{{$gastenBericht->foto }}">
    </div>
    <div class="form-group">
        {!! form::submit('opslaan',  ['class' => 'btn btn-primary form-controle']) !!}
    </div>
{!!Form::close()!!}
@include('layouts.errors')
@endsection
