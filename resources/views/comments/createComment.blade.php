@extends('layouts.liop')

@section('title', 'Novo comentário')

@section('FormTitle', 'Criar novo comentário')

@section('content')
<form action="{{ route('createComment') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group">
        <label for="content">Conteúdo:</label>
        <textarea name="content" id="content" required></textarea>
    </div>
    <input type="hidden" name="topic_id" value="{{ $topic->id }}">
    <div class="input-group">
        <label for="image" class="form-label">Imagem</label>
        <div class="image-post" id="imagePreview" style="display: none;">
            <img id="profileImg" src="" alt="profileImg">
        </div>
        <br>
        <input type="file" name="image" accept="image/*" id="photoUpload">
        @error('image') <span>{{ $message }}</span> <br /> @enderror
    </div>
    <br>
    <button type="submit" class="signs">Comentar</button>
</form>
@endsection