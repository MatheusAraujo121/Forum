@extends('layouts.gpt')

@section('title', 'Bem-vindo!')
@section('header', 'ThunderDevs')

@section('content')
@if(Auth::check())
  <h1 class="welcome-text centered">Bem-vindo! {{ Auth::user()->name }}!</h1>
  <br>
  <h3 class="welcome-text centered">Última postagens ⬇️</h3>
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
        </div>
    </div>
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
        </div>
    </div>
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
        </div>
    </div>

@endif
@if(Auth::guest())
  <h1 class="welcome-text centered">Bem-vindo! faça login para continuar :D</h1>
  <br>
  <h3 class="welcome-text centered">Última postagens ⬇️</h3>
  <div class="card">
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
        </div>
    </div>
@endif
@endsection