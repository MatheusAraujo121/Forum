@extends('layouts.liop')

@section('title', 'Novo comentário')

@section('FormTitle', 'Criar novo comentário')

@section('content')
<form action="{{ route('createComment') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="content">Conteúdo:</label>
    <textarea name="content" id="content" required></textarea>

    <label for="topic_id">Tópico:</label>
    <select name="topic_id" id="topic_id" required>
        @foreach($topics as $topic)
            <option value="{{ $topic->id }}">{{ $topic->title }}</option>
        @endforeach
    </select>

    <label for="image">Imagem (opcional):</label>
    <input type="file" name="image" id="image" accept="image/*">

    <button type="submit">Criar Comentário</button>
</form>
@endsection
