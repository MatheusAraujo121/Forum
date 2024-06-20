@extends('layouts.liop')

@section('title', 'Nova tag')

@section('FormTitle', 'Criar nova tag')

@section('content')
      <form class="formd" action="" method="POST">
        <div class="input-group">
          <label for="Nomta">Nome da tag</label>
          <input type="nomta" id="nomta" name="nomta" value="">
        </div>
        <div class="input-group">
          <label for="Tita">Tipo da tag</label>
          <input type="tita" id="tita" name="tita" value="">
        </div>
        <br>
        <button type="submit" class="signs">Criar</button>
      </form> 
@endsection