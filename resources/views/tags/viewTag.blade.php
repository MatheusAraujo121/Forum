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
                <tr>
                <td>#Jogos
                <td>Gênero de jogos
                @if(Auth::check())
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                    @endif
                <tr>
                <td>#Ação
                <td>Genêro de jogos
                @if(Auth::check())
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                    @endif
                <tr>
                <td>#Genêro
                <td>Genêro de jogos
                @if(Auth::check())
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                    @endif
                <tr>
                <td>#E-sports
                <td>Gênero de jogos 
                @if(Auth::check())
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                    @endif
                <tr>
                <td>#Simulação 
                <td>Gênero de jogos
                @if(Auth::check())
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                    @endif
                <tr>
                <td>#MundoAberto  
                <td>Gênero de jogos
                @if(Auth::check())
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                    @endif
                <tr>
                <td>#Indie 
                <td>Gênero de jogos
                @if(Auth::check())
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                    @endif
            </tbody>
        </table>
@endsection