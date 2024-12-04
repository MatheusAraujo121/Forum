@extends('layouts.gpt')

@section('title', 'Tópicos')

@section('header', 'Listar todos os tópicos')

@section('content')
<h1 class="welcome-text centered">Lista de tópicos</h1>
<br><br><br><br>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Status</th>
            <th>Categoria</th>
            <th>Tags</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($topics as $topic)
            <tr>
                <td>{{ $topic->id }}</td>
                <td>{{ $topic->title }}</td>
                <td>{{ $topic->description }}</td>
                <td>
                    <div class="topic-image">
                        <img src="{{ asset('storage/' . $topic->post->image) }}" alt="profileImg">
                    </div>
                </td>
                <td>{{ $topic->status }}</td>
                <td>{{ $topic->category->title }}</td>
                <td>
                    @foreach ($topic->tags as $tag)
                        <span>{{ $tag->title }}</span>{{ !$loop->last ? ', ' : '' }}
                        <!-- Exibe as tags separadas por vírgula -->
                    @endforeach
                </td>
                <td>
                    <div class="opc">
                        <a class="lgn-3" href="{{ route('editTopic', [$topic->id]) }}">
                            <button class="buttonsd tooltipa">
                                <i class="fa-solid fa-pencil"></i>
                                <span class="tooltiptext">Visualizar Topico</span>
                            </button>
                        </a>
                        <form action="{{ route('deleteTopic', [$topic->id]) }}" method="POST" class="login-form">
                            @csrf
                            @method('delete')
                            <button class="buttonsd tooltipa">
                                <i class="fa-solid fa-ban"></i>
                                <span class="tooltiptext">Excluir</span>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection