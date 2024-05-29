@extends('layouts.gpt')

@section('header', 'Listar todos os usuários')

@section('content')

    <table border="1">
        <tr>
            <th> Nome </th>
            <th> Email </th>
        </tr>
        <tr>
            <td>Fulano</td>
            <td>fulano@gmail.com</td>
        </tr>
    </table>   
@endsection