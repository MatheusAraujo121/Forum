@extends('layouts.liop')

@section('title', 'Editar comentário')

@section('FormTitle', 'Editar comentário')

@section('content')
<form action="{{ route('updateComment', $comment->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="input-group">
        <label for="content">Conteúdo:</label>
        <textarea name="content" id="content" required>{{ old('content', $comment->content) }}</textarea>
    </div>
    <div class="input-group">
        <label for="image" class="form-label">Imagem</label>
        @if($comment->post->image)
            <div class="image-post">
                <img id="profileImg" src="{{ asset('storage/' . $comment->post->image) }}" alt="profileImg">
            </div>
        @endif
        <br>
        <input type="file" name="image" accept="image/*" id="photoUpload">
        @error('image') <span>{{ $message }}</span> @enderror
    </div>
    <br>
    <button type="submit" class="signs">Atualizar Comentário</button>
</form>
@endsection