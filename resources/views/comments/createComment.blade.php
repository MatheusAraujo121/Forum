@extends('layouts.liop')

@section('title', 'Novo comentário')

@section('FormTitle', 'Criar novo comentário')

@section('content')
<form action="{{ route('createComment') }}" method="POST">
    @csrf
    <div>
        <label for="content">Conteúdo:</label>
        <textarea id="content" name="content" required></textarea>
        @error('content') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="topic_id">Tópico:</label>
        <select id="topic_id" name="topic_id" required>
            @foreach ($topics as $topic)
            <option value="{{ $topic->id }}">{{ $topic->title }}</option>
            @endforeach
        </select>
        @error('topic_id') <span>{{ $message }}</span> @enderror
    </div>
    <button type="submit">Criar</button>
</form>
@endsection
