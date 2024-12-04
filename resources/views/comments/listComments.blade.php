@extends('layouts.gpt')

@section('title', 'Comentários')

@section('header', 'Listar todos os comentários')

@section('content')
<h1 class="welcome-text centered">Comentários cadastrados</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Conteúdo</th>
            <th>Tópico</th>
            <th>Imagem</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comments as $comment)
            <tr>
                <td>{{ $comment->id }}</td>
                <td>{{ $comment->content }}</td>
                <td>{{ $comment->topic->title }}</td>
                @if($comment->post->image == null)
                    <td>Sem imagem</td>
                @else
                    <td>
                        <div class="topic-image">
                            <img src="{{ asset('storage/' . $comment->post->image) }}" alt="Imagem do comentário">
                        </div>
                    </td>
                @endif
                <td>
                    <div class="opc">
                        <a class="lgn-3" href="{{ route('editComment', [$comment->id]) }}">
                            <button class="buttonsd tooltipa">
                                <i class="fa-solid fa-pencil"></i>
                                <span class="tooltiptext">Visualizar Comentário</span>
                            </button>
                        </a>
                        <form action="{{route('deleteComment', [$comment->id])}}" method="POST" class="login-form">
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