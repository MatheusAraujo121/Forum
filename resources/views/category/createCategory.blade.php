@extends('layouts.liop')

@section('title', 'Novo tópico')

@section('FormTitle', 'Criar novo tópico')

@section('content')

<form class="formd" action="{{route('categoryCreate')}}" method="POST">
  @csrf
  <div class="input-group">
    <label for="title">Título da categoria</label>
    <input type="text" id="title" name="title" value="{{old('title')}}" required>
    @error('tittle') <span>{{ $message }}</span> @enderror
  </div>
  <div class="input-group">
    <label for="description">Assunto</label>
    <input type="text" id="description" name="description" value="{{old('description')}}" required>
    @error('description') <span>{{ $message }}</span> @enderror
  </div>
  <br>
  <button type="submit" class="signs">Criar</button>
</form>

@endsection