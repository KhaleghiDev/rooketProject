@extends('layouts.backend.master')


@section('title',"Dashboard - Rocket Admin")
@section('content')
    <h2>create category tag</h2>
<form action="{{route('admin.category.store') }}" method="post">

    <input type="text" name="title" placeholder="title">
    <input type="text" name="slug" placeholder="slug">
    <input type="file" name="icon" placeholder="icon">
    <input type="text" name="description" placeholder="description">
    <input type="text" name="meta_key" placeholder="meta_key">
    <input type="text" name="meta_description" placeholder="meta_description">
    <select  name="is_published">
        <option value="0">unpublic</option>
        <option value="1">public</option>
    </select>
    <button type="submit">send</button>
</form>
@endsection
