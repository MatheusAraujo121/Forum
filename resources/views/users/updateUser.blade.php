@extends('layouts.gpt')

@section('header', 'Atualizar usuário')

@section('content')

    <h1>Novas informações usuário</h1> 
    <form action="">

        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username"><br><br>

        <label for="senha">Senha:</label>
        <input type="text" id="senha" name="senha"><br><br>

    </form>

<button type="submit" form="form1" value="Submit">Atualizar</button>   
@endsection