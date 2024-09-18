@extends('layouts.gpt')

@section('title', 'Categorias')

@section('header', 'Listar todas as categorias')

@section('content')
<h1 class="welcome-text centered">Lista de categorias</h1>
<br><br><br><br>
        <table>
            <thead>
                <tr>
                <th>ID
                <th>Título
                <th>Descrição
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                <td>{{$category->id}}
                <td>{{$category->title}}
                <td>{{$category->description}}
                @endforeach
            </tbody>
        </table>
@endsection