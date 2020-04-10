@extends('base')

@section('content')
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        img {
            width: 100px;
            height: 100px;
        }
    </style>
    <a href="{{ url('logout') }}">Logout</a><br><br>

    <table>
        <tr>
            <th>Image</th>
            <th>Url</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td><img src="{{ $item->url }}" alt="img"></td>
                <td>{{ $item->url }}</td>
                <td><a href="{{ url('items') }}/{{$item->id}}">Update</a></td>
                <td><a href="{{ url('delete') }}/{{$item->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    <a href="{{ url('new') }}">New Image</a>

@endsection
