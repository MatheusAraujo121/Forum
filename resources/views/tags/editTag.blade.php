@extends('layouts.liop')

@section('title', 'Editar tag')

@section('FormTitle', 'Editar tag')

@section('content')

      <form class="formd" action="{{ route('updateTag', ['uid' => $tag->id]) }}" method="POST">
      @csrf
      @method('put')
        <div class="input-group">
          <label for="tagname">Nome da tag</label>
          <input type="tagname" id="tagname" name="tagname" value="{{$tag->tagname}}">
          @error('tagname') <span>{{ $message }}</span> @enderror
        </div>
        <div class="input-group">
          <label for="tagtype">Tipo da tag</label>
          <input type="tagtype" id="tagtype" name="tagtype" value="{{$tag->tagtype}}">
          @error('tagtype') <span>{{ $message }}</span> @enderror
        </div>
        <br>
        <button type="submit" class="signs">Atualizar</button>
      </form> 
@endsection