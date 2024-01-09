@extends('layouts.backend.master')


@section('title',"Dashboard - Rocket Admin")
@section('content')
    <h2>category tag</h2>

    @foreach ($categories as $category )
        {{ $category->title }} -{{ $category->slug }}<br>
    @endforeach

@endsection
