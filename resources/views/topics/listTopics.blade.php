@extends('layouts.gpt')

@section('title', 'Tags')

@section('header', 'Listar todas as tags')

@section('content')
<h1 class="welcome-text centered">Lista de tags</h1>
<br><br><br><br>
        <table>
            <thead>
                <tr>
                <th>ID
                <th>Título
                <th>Descrição
                <th>Imagem
                <th>Status
                <th>Categoria
            </thead>
            <tbody>
            @foreach ($topics as $topic)
                <tr>
                <td>{{$topic->id}}
                <td>{{$topic->title}}
                <td>{{$topic->description}}
                <td>{{$topic->image}}
                <td>{{$topic->status}}
                <td>{{$topic->category}}
                <td>
                    <div class="opc">
                        <a class="lgn-3" href="{{ route('ViewTag', [$topic->id]) }}">
                            <button class="buttonsd tooltip">
                                <i class="fa-solid fa-pencil"></i>
                                <span class="tooltiptext">Visualizar Topico</span>
                            </button>
                        </a>
                        <form action="{{route('DeleteTag', [$topic->id])}}" method="POST" class="login-form">
                            @csrf
                            @method('delete')
                            <button class="buttonsd tooltip">
                                <i class="fa-solid fa-ban"></i>
                                <span class="tooltiptext">Excluir</span>
                            </button>
                        </form>    
                    </div>
                @endforeach
            </tbody>
        </table>
@endsection