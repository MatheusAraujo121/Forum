@extends('layouts.gpt')

@section('title', 'Tags')

@section('header', 'Listar todos os tópicos')

@section('content')
<h1 class="welcome-text centered">Tags cadastradas</h1>
<br><br><br><br>
        <table>
            <thead>
                <tr>
                <th>Nome da tag
                <th>Tipo da tag
                @if(Auth::check())
                <th>Opções
                @endif
            </thead>
            <tbody> 
            @if($tags->isEmpty())
                <tr>
                    <td colspan="3">Nenhuma tag cadastrada.</td>
                </tr>
            @else
                @foreach ($tags as $tag)
                    <tr>
                    <td>{{$tag->tagname}}
                    <td>{{$tag->tagtype}}
                    @if(Auth::check())
                    <td><div class="buttons-container">
                        <a class="lgn-3" href="{{ route('editTag', [$tag->id]) }}">
                            <button class="circle-buttons edit-buttons">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                        </a>
                            <form action="{{route('deleteTag', [$tag->id])}}" method="POST" class="login-form">
                                @csrf
                                @method('delete')
                                <button class="circle-buttons delete-buttons">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form> 
                        </div>
                    @endif
                @endforeach
            @endif
            </tbody>
        </table>
@endsection