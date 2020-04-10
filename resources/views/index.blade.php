@extends('base')

@section('content')
    <img src="{{ isset($url) ? $url : "https://via.placeholder.com/500x500" }}">
@endsection
