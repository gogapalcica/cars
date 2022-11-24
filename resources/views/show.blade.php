@extends('layouts.master')

@section('title',$car->producer)

@section('content')
        <h2>automobil</h2>

        <p>{{$car->producer}}</p>

@endsection
