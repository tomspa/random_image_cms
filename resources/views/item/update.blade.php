@extends('base')

@section('content')
    <form action="{{ url('post_update') }}" method="POST">
        @csrf
        url: <input name="url" style="width: 400px" type="text" value="{{ $item->url }}"><br>
        <input type="submit" value="update">
        <input name="id" type="hidden" value="{{ $item->id }}" ><br>
    </form>
@endsection
