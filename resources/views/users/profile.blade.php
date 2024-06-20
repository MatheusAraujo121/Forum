@extends('layouts.liop')

@section('title', 'Atualizar perfil')

@section('FormTitle', 'Atualizar perfil')

@section('content')
    <span>{{ session('message') }}</span>
    @if($user != null)
      <form class="formd" action="{{ route('UpdateUser', [$user->id]) }}" method="POST">
      @csrf
      @method('put')
      <div class="input-group">
          <label for="Name">Nome</label>
          <input type="name" id="name" name="name" value="{{$user->name}}">
          @error('name') <span>{{ $message }}</span> @enderror
      </div>
        <div class="input-group">
          <label for="Email">Email</label>
          <input type="email" id="email" name="email" value="{{$user->email}}">
          @error('email') <span>{{ $message }}</span> @enderror
        </div>
        <div class="input-group">
          <label for="password">Senha</label>
          <input type="password" id="password" name="password">
          @error('password') <span>{{ $message }}</span> @enderror
        </div>
        <div class="input-group">
          <label for="password_confirmation">Confirmar senha</label>
          <input type="password" id="password_confirmation" name="password_confirmation">
          <div class="forgot">
            <a rel="noopener noreferrer" href="#"></a>
          </div>
        </div>
        <button type="submit" class="signs">Atualizar</button>
      </form> 
      @endif
@endsection

