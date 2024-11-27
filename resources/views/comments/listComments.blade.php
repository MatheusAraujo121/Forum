
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
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comments as $comment)
        <tr>
            <td>{{ $comment->id }}</td>
            <td>{{ $comment->content }}</td>
            <td>{{ $comment->topic->title }}</td>
            <td>
                <a href="{{ route('editComment', $comment->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('deleteComment', $comment->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection