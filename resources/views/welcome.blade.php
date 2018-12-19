@extends('layouts.searchbar')

@section('title', 'Page Title')

@section('searchbar')
    @parent

    <p>This is appended to the master searchbar.</p>
@stop

@section('content')
    <p>This is my body content.</p>
@stop
@extends('layouts.sidebar')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    <p>This is my body content.</p>
@stop