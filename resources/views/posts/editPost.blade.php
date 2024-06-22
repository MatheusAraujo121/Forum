@extends('layouts.liop')

@section('title', 'Editar postagem')

@section('FormTitle', 'Editar postagem')

@section('content')
      <form class="formd" action="" method="POST">
        <div class="input-group">
          <label for="Titulo">Titulo da postagem</label>
          <input type="text" id="titulo" name="titulo" value="">
        </div>
        <div class="input-group">
          <label for="Tags">Tags</label>
          <input type="text" id="tags" name="tags" value="">
        </div>
        <div class="input-group">
          <label for="Topics">Tópico</label>
          <input type="text" id="topics" name="topics" value="">
        </div>
        <div class="input-group">
          <label for="Ptext">Escreva sua postagem</label>
          <textarea type="text" name = 'body'  rows="3" > </textarea>
          
        </div>
        <br>
        <button type="submit" class="signs">Re-postar</button>
      </form> 
@endsection