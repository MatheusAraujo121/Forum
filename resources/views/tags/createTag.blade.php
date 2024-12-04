@extends('layouts.liop')

@section('title', 'Nova tag')

@section('FormTitle', 'Criar nova tag')

@section('content')

<form class="formd" action="{{route('newTag')}}" method="POST">
  @csrf
  <div class="input-group">
    <label for="title">Título da tag</label>
    <input type="title" id="title" name="title" value="">
    @error('title') <span>{{ $message }}</span> @enderror
  </div>
  <br>
  <button type="submit" class="signs">Criar</button>
</form>
@endsection