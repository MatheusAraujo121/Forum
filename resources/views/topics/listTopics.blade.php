@extends('layouts.gpt')

@section('title', 'Tópicos')

@section('header', 'Listar todos os tópicos')

@section('content')
<h1 class="welcome-text centered">Lista de tópicos</h1>
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
                <td><div class="topic-image">
                    <img src="{{ asset('storage/' .$topic->post->image) }}" alt="profileImg">
                </div>
                <td>{{$topic->status}}
                <td>{{$topic->category->title}}
                <td>
                    <div class="opc">
                        <a class="lgn-3" href="{{ route('editTopic', [$topic->id]) }}">
                            <button class="buttonsd tooltipa">
                                <i class="fa-solid fa-pencil"></i>
                                <span class="tooltiptext">Visualizar Topico</span>
                            </button>
                        </a>
                        <form action="{{route('deleteTopic', [$topic->id])}}" method="POST" class="login-form">
                            @csrf
                            @method('delete')
                            <button class="buttonsd tooltipa">
                                <i class="fa-solid fa-ban"></i>
                                <span class="tooltiptext">Excluir</span>
                            </button>
                        </form>    
                    </div>
                @endforeach
            </tbody>
        </table>
@endsection