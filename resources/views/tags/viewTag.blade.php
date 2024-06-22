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
                <th>Opções
            </thead>
            <tbody>
                <tr>
                <td>#Jogos
                <td>Gênero de jogos
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                <tr>
                <td>#Ação
                <td>Genêro de jogos
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                <tr>
                <td>#Genêro
                <td>Genêro de jogos
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                <tr>
                <td>#E-sports
                <td>Gênero de jogos 
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                <tr>
                <td>#Simulação 
                <td>Gênero de jogos
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                <tr>
                <td>#MundoAberto  
                <td>Gênero de jogos
                <td><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                <tr>
                <td>#Indie 
                <td>Gênero de jogos
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