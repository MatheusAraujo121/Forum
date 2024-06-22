@extends('layouts.gpt')

@section('title', 'Tags')

@section('header', 'Listar todos os tópicos')

@section('content')
<h1 class="welcome-text centered">Minhas postagens</h1>
<br><br><br><br>
    <div class="card">
        <div class="tittlet">Aviso de manutenção</div>
        <div class="card-header">
            <div class="name">Moderador</div>
            <div class="tag">#Manutenção</div>
            <div class="tag">#Aviso</div>
        </div>
        <div class="topic">Tópico: Servidor</div>
        <div class="content">
          Prezados usuários,
          <br>
          <br>
          Gostaríamos de informar que estaremos realizando uma manutenção programada em nossos servidores para <br>melhorias e atualizações essenciais. 
          <br>Durante este período, alguns serviços podem ficar temporariamente indisponíveis.
          <br><br><div class="buttons-container">
                        <button class="circle-buttons edit-buttons">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="circle-buttons delete-buttons">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
        </div>
    </div>
@endsection