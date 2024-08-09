@extends('layouts.liop')

@section('title', 'Nova tag')

@section('FormTitle', 'Criar nova tag')

@section('content')

      <form class="formd" action="{{route('newTag')}}" method="POST">
      @csrf
        <div class="input-group">
          <label for="tagname">Nome da tag</label>
          <input type="tagname" id="tagname" name="tagname" value="">
          @error('tagname') <span>{{ $message }}</span> @enderror
        </div>
        <div class="input-group">
          <label for="tagtype">Tipo da tag</label>
          <input type="tagtype" id="tagtype" name="tagtype" value="">
          @error('tagtype') <span>{{ $message }}</span> @enderror
        </div>
        <br>
        <button type="submit" class="signs">Criar</button>
      </form> 
@endsection