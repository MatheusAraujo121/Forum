@extends('layouts.liop')

@section('title', 'Editar comentário')

@section('FormTitle', 'Editar comentário')

@section('content')
<form action="{{ route('updateComment', $comment->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="content">Conteúdo:</label>
        <textarea id="content" name="content" required>{{ $comment->content }}</textarea>
        @error('content') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="topic_id">Tópico:</label>
        <select id="topic_id" name="topic_id" required>
            @foreach ($topics as $topic)
            <option value="{{ $topic->id }}" {{ $comment->topic_id == $topic->id ? 'selected' : '' }}>
                {{ $topic->title }}
            </option>
            @endforeach
        </select>
        @error('topic_id') <span>{{ $message }}</span> @enderror
    </div>
    <button type="submit">Atualizar</button>
</form>
@endsection
