@extends('layouts.master') 
@section('content') 
<h2> Maak GastenBericht</h2>
{!! Form::open(['action' => ['GastenBerichtController@store'],'files'=> true]) !!}
    @include('GastenBericht.formfields')
    <div class="form-group">
        {!! form::submit('opslaan',  ['class' => 'btn btn-primary form-controle']) !!}
    </div>
{!!Form::close()!!}
@include('layouts.errors')
@endsection
