@extends('layouts.gpt')

@section('title', 'Tópicos')

@section('header', 'Listar todos os tópicos')

@section('content')
<h1 class="welcome-text centered">Tópicos cadastrados</h1>
<br><br><br><br>
        <table>
            <thead>
                <tr>
                <th>Título do tópico
                <th>Assunto
                <th>Tags
                    @if(Auth::check())
                <th>Opções
                    @endif
            </thead>
            <tbody>
                <tr>
                <td>Ação
                <td>Gênero de jogos
                <td>#Ação #Genêro #Jogos
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
                <td>Fifa 23
                <td>Jogos de esporte
                <td>#E-sports #Jogos #Simulação
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
                <td>GTA V
                <td>Jogos de simulação
                <td>#Jogos #Simulação #MundoAberto 
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
                <td>Indie
                <td>Genêro de jogos
                <td>#Indie #Jogos #Genêro 
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