@extends('layouts.gpt')

@section('title', 'Usuários')

@section('header', 'Listar todos os usuários')

@section('content')
<h1 class="welcome-text centered">Lista de usuários</h1>
<br><br><br><br>
        <table>
            <thead>
                <tr>
                <th>ID
                <th>Nome
                <th>Email
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                <td>{{$user->id}}
                <td>{{$user->name}}
                <td>{{$user->email}}
                @endforeach
            </tbody>
        </table>
@endsection