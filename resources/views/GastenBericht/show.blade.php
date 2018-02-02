@extends('layouts.master')
@section('content')
<h2> Bekijk GastenBericht</h2>
{!! Form::model($gastenBericht, ['method'=> 'get','action' => ['GastenBerichtController@show', 'GastenBericht'=>$gastenBericht->id]]) !!}
    @include('GastenBericht.formfields')
    <div class="form-group">
        <img src="{{$gastenBericht->foto }}" alt="{{$gastenBericht->foto }}">
    </div>
{!!Form::close()!!}
@endsection

