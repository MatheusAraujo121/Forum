@extends('layouts.liop')

@section('title', 'Editar tag')

@section('FormTitle', 'Editar tag')

@section('content')
<span>{{ session('message') }}</span>
    @if($tag != null)
      <form class="formd" action="{{ route('UpdateTag', [$tag->id]) }}" method="POST">
      @csrf
      @method('put')
        <div class="input-group">
          <label for="title">Título da tag</label>
          <input type="title" id="title" name="title" value="{{$tag->title}}">
          @error('title') <span>{{ $message }}</span> @enderror
        </div>
        <br>
        <button type="submit" class="signs">Atualizar</button>
      </form> 
    @endif
@endsection