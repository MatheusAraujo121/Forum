@extends('layouts.liop')

@section('title', 'Editar tópico')

@section('FormTitle', 'Editar tópico')

@section('content')

      <form class="formd" action="" method="POST">
        <div class="input-group">
          <label for="Tito">Título do tópico</label>
          <input type="tito" id="tito" name="tito" value="">
        </div>
        <div class="input-group">
          <label for="Assunto">Assunto</label>
          <input type="assunto" id="assunto" name="assunto" value="">
        </div>
        <div class="input-group">
          <label for="Tags">Tags</label>
          <input type="tags" id="tags" name="tags" value="">
        </div>
        <br>
        <button type="submit" class="signs">Atualizar</button>
      </form> 
@endsection