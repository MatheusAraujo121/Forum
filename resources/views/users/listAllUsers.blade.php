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
            <th>Foto
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}
                <td>{{$user->name}}
                <td>{{$user->email}}
                <td>
                    <div class="user-picture">
                        <img src="{{ asset('storage/' . $user->photo) }}" alt="profileImg">
                    </div>
        @endforeach
    </tbody>
</table>
@endsection