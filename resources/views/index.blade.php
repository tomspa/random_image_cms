@extends('base')

@section('content')
    random image:<br>
    <img src="{{ isset($item->url) ? $item->url : "https://via.placeholder.com/500x500" }}"><br>
    @if (Auth::check())
        <a href="{{ url('logout') }}">Logout</a>
    @endif
@endsection
