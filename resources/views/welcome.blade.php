@extends('layouts.gpt')

@section('title', 'Bem-vindo!')
@section('header', 'ThunderDevs')

@section('content')
  @if(Auth::check())
    <h1 class="welcome-text centered">Bem-vindo, {{ Auth::user()->name }}!</h1>
    <br>
    <h3 class="welcome-text centered">Últimas postagens ⬇️</h3>
    @foreach($topics as $topic)
      <div class="card topic-card">
          <div class="card-header">
              <img class="user-image" src="{{ asset('storage/' . $topic->post->user->photo) }}" alt="Foto do usuário">
              <div class="info">
                  <div class="name">{{ $topic->post->user->name }}</div>
                  <div class="date">{{ $topic->created_at->timezone('America/Sao_Paulo')->format('d/m/Y H:i') }}</div>
              </div>
          </div>
          <div class="card-body">
              <h3 class="title">{{ $topic->title }}</h3>
              <p class="category">Categoria: {{ $topic->category->title }}</p>
              <p class="description">{{ $topic->description }}</p>
              @if($topic->post->image)
              <img class="content-image" src="{{ asset('storage/' . $topic->post->image) }}" alt="Imagem do tópico">
              @endif
              <div class="tags">
                  @foreach($topic->tags as $tag)
                      <span class="tag">#{{ $tag->title }}</span>
                  @endforeach
              </div>
              <br>
              <a href="{{ route('newComment', ['id' => $topic->id]) }}" class="btn btn-primary">Comentar</a>
          </div>
      </div>
      <div class="comments-section">
          @foreach($topic->comments as $comment)
            <div class="card comment-card">
                <div class="comment-header">
                    <img class="user-image" src="{{ asset('storage/' . $comment->post->user->photo) }}" alt="Foto do usuário">
                    <div class="info">
                        <div class="name">{{ $comment->post->user->name ?? 'Usuário Desconhecido' }}</div>
                        <div class="date">{{ $comment->created_at->timezone('America/Sao_Paulo')->format('d/m/Y H:i') }}</div>
                    </div>
                </div>
                <div class="comment-content">
                    <p>{{ $comment->content }}</p>
                    @if($comment->post->image)
                      <img class="content-image" src="{{ asset('storage/' . $comment->post->image) }}" alt="Imagem do comentário">
                    @endif
                    <br>
                    <p>Comentou em: {{$comment->topic->title}}</p>
                </div>
            </div>
          @endforeach
      </div>
    @endforeach
  @endif
@endsection
