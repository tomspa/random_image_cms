@extends('base')

@section('content')
    <form action="{{ url('post_new') }}" method="POST">
        @csrf
        url: <input name="url" style="width: 400px" type="text" required><br>
        <input type="submit" value="Add">
    </form>
@endsection
