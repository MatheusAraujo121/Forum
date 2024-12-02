@extends('layouts.liop')

@section('title', 'Editar comentário')

@section('FormTitle', 'Editar comentário')

@section('content')
<form action="{{ route('updateComment', $comment->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="content">Conteúdo:</label>
    <textarea name="content" id="content" required>{{ old('content', $comment->content) }}</textarea>

    <label for="topic_id">Tópico:</label>
    <select name="topic_id" id="topic_id" required>
        @foreach($topics as $topic)
            <option value="{{ $topic->id }}" {{ $topic->id == old('topic_id', $comment->topic_id) ? 'selected' : '' }}>
                {{ $topic->name }}
            </option>
        @endforeach
    </select>

    <label for="image">Imagem (opcional):</label>
    <input type="file" name="image" id="image" accept="image/*">

    @if ($comment->image_path)
        <div>
            <img src="{{ asset('storage/' . $comment->image_path) }}" alt="Imagem do Comentário" width="100">
        </div>
    @endif

    <button type="submit">Atualizar Comentário</button>
</form>
@endsection
