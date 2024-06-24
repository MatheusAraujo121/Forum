@extends('layouts.gpt')

@section('title', 'Denúncias')

@section('header', 'Listar todos os usuários denunciados')

@section('content')
<h1 class="welcome-text centered">Tabelas de denúncias</h1>
<br><br><br><br>
       <table>
            <thead>
                <tr>
                <th>ID
                <th>Nome
                <th>Email
                <th>Opções
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                <td>{{$user->id}}
                <td>{{$user->name}}
                <td>{{$user->email}}
                @if($user->id!=1)
                <td>
                    <div class="opc">
                        <button class="buttonsd tooltip">
                            <i class="fa-solid fa-user-clock"></i>
                            <span class="tooltiptext">Suspender</span>
                        </button>
                        <form action="{{route('DeleteUser', [$user->id])}}" method="POST" class="login-form">
                            @csrf
                            @method('delete')
                            <button class="buttonsd tooltip">
                                <i class="fa-solid fa-ban"></i>
                                <span class="tooltiptext">Banir</span>
                            </button>
                        </form>    
                    </div>
                @endif
                @endforeach
            </tbody>
        </table>
@endsection