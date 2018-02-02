@extends('layouts.master')
@section('content')
    <ul>
        @foreach($gastenBerichten as $gastenBericht)
            <li> 
                <a href="/gastenbericht/{{ $gastenBericht->id }}">{{ $gastenBericht->name }} </a>
                <a href="/gastenbericht/{{ $gastenBericht->id }}/edit">wijzigen </a>
                <a href="/gastenbericht/{{ $gastenBericht->id }}/delete">verwijderen </a>
            </li>
        @endforeach 
    </ul>
@endsection