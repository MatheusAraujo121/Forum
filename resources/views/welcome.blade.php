@extends('layouts.gpt')

@section('title', 'Bem-vindo!')
@section('header', 'ThunderDevs')

@section('content')
@if(Auth::check())
  <h1 class="welcome-text">Bem-vindo! {{ Auth::user()->name }}!</h1>
@endif
@if(Auth::guest())
  <h1 class="welcome-text">Bem-vindo! faça login para continuar :D</h1>
@endif
@endsection