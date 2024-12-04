@extends('layouts.liop')

@section('title', 'Novo tópico')

@section('FormTitle', 'Criar novo tópico')

@section('content')

<form class="formd" action="{{ route('createTopic') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="input-group">
    <label for="title">Título do tópico</label>
    <input type="text" id="title" name="title" value="">
    @error('title') <span>{{ $message }}</span> <br /> @enderror
  </div>
  <div class="input-group">
    <label for="description" class="form-label">Descrição</label>
    <input type="text" name="description" id="description" />
    @error('description') <span>{{ $message }}</span> <br /> @enderror
  </div>
  <div class="input-group">
    <label for="status" class="form-label">Status (0 = Fechado/ 1 = Aberto)</label>
    <input type="text" name="status" id="status" class="form-control" />
    @error('status') <span>{{ $message }}</span> <br /> @enderror
  </div>
  <div class="input-group">
    <label for="image" class="form-label">Imagem</label>
    <div class="image-post" id="imagePreview" style="display: none;">
      <img id="profileImg" src="" alt="profileImg">
    </div>
    <br>
    <input type="file" name="image" accept="image/*" id="photoUpload">
    @error('image') <span>{{ $message }}</span> <br /> @enderror
  </div>
  <div class="input-group">
    <label for="category" class="form-label">Categoria</label>
    <select name="category" id="category" class="custom-select">
      @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->title }}</option>
      @endforeach
    </select>
  </div>
  <div class="input-group">
    <label for="tags">Tags:</label>
    <select name="tags[]" id="tags" class="custom-select" multiple>
      @foreach($tags as $tag)
        <option value="{{ $tag->id }}" {{ in_array($tag->id, old('tags', [])) ? 'selected' : '' }}>{{ $tag->title }}
        </option>
      @endforeach
    </select>
  </div>
  <br>
  <button type="submit" class="signs">Criar</button>
</form>
@endsection