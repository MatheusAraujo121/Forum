@extends('layouts.gpt')

@section('header', 'Listar todos os usuários')

@section('content')

    <table border="1">
        <tr>
            <th> Nome </th>
            <th> Email </th>
            <th> Opções </th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>fulano@gmail.com</td>
        </tr>
        @endforeach
    </table>   
@endsection