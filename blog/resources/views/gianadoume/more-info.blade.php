@extends('layouts.app')

@section('title')
    <h1>hello</h1>
   <p>this is {{$name}}</p>
    <p>lastname:{{$lastname}}</p>
    <p>age:{{$other['body']['height']}}</p>
@endsection