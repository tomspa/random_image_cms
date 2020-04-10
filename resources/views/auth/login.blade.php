@extends('base')

@section('content')
<form action="{{ url('post_login') }}" method="POST">
    @csrf
    <input type="text" placeholder="username" required>
    <input type="password" placeholder="password" required>
    <input type="submit" value="login">
</form>
@endsection
