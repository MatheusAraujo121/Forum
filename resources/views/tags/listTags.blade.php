@extends('layouts.gpt')

@section('title', 'Tags')

@section('header', 'Listar todas as tags')

@section('content')
<h1 class="welcome-text centered">Lista de tags</h1>
<br><br><br><br>
        <table>
            <thead>
                <tr>
                <th>ID
                <th>Título
                <th>Opções
            </thead>
            <tbody>
            @foreach ($tags as $tag)
                <tr>
                <td>{{$tag->id}}
                <td>{{$tag->title}}
                <td>
                    <div class="opc">
                        <a class="lgn-3" href="{{ route('ViewTag', [$tag->id]) }}">
                            <button class="buttonsd tooltip">
                                <i class="fa-solid fa-pencil"></i>
                                <span class="tooltiptext">Visualizar Categoria</span>
                            </button>
                        </a>
                        <form action="{{route('DeleteTag', [$tag->id])}}" method="POST" class="login-form">
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