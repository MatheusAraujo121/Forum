@extends('layouts.liop')

@section('title', 'Login')

@section('FormTitle', 'Login')

@section('content')
<form class="formd" action="{{route('login')}}" method="POST">
  @csrf
  <div class="input-group">
    <label for="Email">Email</label>
    <input type="email" id="email" name="email" value="{{old('email')}}" required>
  </div>
  <div class="input-group">
    <label for="password">Senha</label>
    <input type="password" id="password" name="password" required>
    @error('password') <span>{{ $message }}</span> @enderror
    <div class="forgot">
      <a rel="noopener noreferrer" href="#"></a>
    </div>
  </div>
  <button type="submit" class="signs">Entrar</button>
</form>
<br>
<p class="signup">Você não tem uma conta?
  <a rel="noopener noreferrer" href="{{ url('/register') }}" class="">Cadastre-se</a>
</p>
@endsection