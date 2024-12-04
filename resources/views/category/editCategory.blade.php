@extends('layouts.liop')

@section('title', 'Editar categoria')

@section('FormTitle', 'Editar categoria')

@section('content')
<span>{{ session('message') }}</span>
    @if($category != null)
      <form class="formd" action="{{ route('UpdateCategory', [$category->id]) }}" method="POST">
        @csrf
        @method('put')
          <div class="input-group">
            <label for="Title">Título:</label>
            <input type="title" id="title" name="title" value="{{$category->title}}">
            @error('title') <span>{{ $message }}</span> @enderror
          </div>
          <div class="input-group">
            <label for="Description">Descrição:</label>
            <input type="description" id="description" name="description" value="{{$category->description}}">
            @error('description') <span>{{ $message }}</span> @enderror
          </div>
          <br>
          <button type="submit" class="signs">Atualizar</button>
      </form> 
    @endif
@endsection