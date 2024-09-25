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
                <th>Opções
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                <td>{{$category->id}}
                <td>{{$category->title}}
                <td>{{$category->description}}
                <td>
                    <div class="opc">
                        <a class="lgn-3" href="{{ route('ViewCategory', [$category->id]) }}">
                            <button class="buttonsd tooltip">
                                <i class="fa-solid fa-pencil"></i>
                                <span class="tooltiptext">Visualizar Categoria</span>
                            </button>
                        </a>
                        <form action="{{route('DeleteCategory', [$category->id])}}" method="POST" class="login-form">
                            @csrf
                            @method('delete')
                            <button class="buttonsd tooltip">
                                <i class="fa-solid fa-ban"></i>
                                <span class="tooltiptext">Excluir</span>
                            </button>
                        </form>    
                    </div>
                @endforeach
            </tbody>
        </table>
@endsection