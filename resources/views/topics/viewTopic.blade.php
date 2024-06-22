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
                <th>Opções
            </thead>
            <tbody>
                <tr>
                <td>Ação
                <td>Gênero de jogos
                <td>#Ação #Genêro #Jogos
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                <tr>
                <td>Fifa 23
                <td>Jogos de esporte
                <td>#E-sports #Jogos #Simulação
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div> 
                <tr>
                <td>GTA V
                <td>Jogos de simulação
                <td>#Jogos #Simulação #MundoAberto 
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                <tr>
                <td>Indie
                <td>Genêro de jogos
                <td>#Indie #Jogos #Genêro 
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
            </tbody>
        </table>
@endsection