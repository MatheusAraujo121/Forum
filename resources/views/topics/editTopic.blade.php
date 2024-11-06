@extends('layouts.liop')

@section('title', 'Editar tópico')

@section('FormTitle', 'Editar tópico')

@section('content')

      <form class="formd" action="{{ route('editTopic') }}" method="POST">
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
          <label for="status" class="form-label">Status</label>
          <input type="text" name="status" id="status" class="form-control" />
          @error('status') <span>{{ $message }}</span> <br /> @enderror
        </div>
        <div class="input-group">
          <label for="image" class="form-label">Imagem</label>
          <input type="text" name="image" id="image" class="form-control" />
          @error('image') <span>{{ $message }}</span> <br /> @enderror
        </div>
        <div class="input-group">
          <label for="category" class="form-label">Categoria</label>
          <select name="category" id="category" class="form-control">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->title }}</option>
          @endforeach
          </select>
        </div>
        <br>
        <button type="submit" class="signs">Atualizar</button>
      </form> 
@endsection