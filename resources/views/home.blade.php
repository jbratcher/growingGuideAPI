@extends('layouts/app')

@section('title', 'Home')

@section('content')

    <h1>Hello, Grow Guide API</h1>

    <a href="{{ url('/plants') }}">Plant list</a>

@endsection