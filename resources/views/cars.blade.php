@extends('layouts.master')
        
@section('title', 'cars')      
        
@section('content')      
    <h2>automobili</h2>


    <ul>
        @foreach ($cars as $car)
            <li><a href= "{{route('OnlyCar',['id'=> $car->id])}}">{{$car->title}}</a></li>

        @endforeach
    </ul>
        
@endsection
