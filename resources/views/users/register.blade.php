<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tela de Cadastro</title>
<style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f5f5f5;
    }

    .container {
      width: 260px;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-form {
      text-align: center;
    }

    .login-form h2 {
      margin-bottom: 30px;
      color: #333;
    }

    .input-field {
      margin-bottom: 20px;
      position: relative;
      right: 10px;
    }

    .input-field input {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      transition: border-color 0.3s ease;
    }

    .input-field input:focus {
      outline: none;
      border-color: #3498db;
    }

    .input-field label {
      position: absolute;
      top: 50%;
      left: 10px;
      transform: translateY(-50%);
      background-color: #fff;
      padding: 0 5px;
      color: #999;
      font-size: 16px;
      pointer-events: none;
      transition: top 0.3s ease, font-size 0.3s ease, color 0.3s ease;
    }

    .input-field input:focus + label, .input-field input:valid + label {
      top: -10px;
      font-size: 12px;
      color: #3498db;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #2980b9;
    }
    .wave-group {
        margin-bottom: 20px;
        position: relative;
      }
      
      .wave-group .input {
        font-size: 16px;
        padding: 10px 10px 10px 5px;
        display: block;

        border: none;
        border-bottom: 1px solid #515151;
        background: transparent;
      }
      
      .wave-group .input:focus {
        outline: none;
      }
      
      .wave-group .label {
        color: #999;
        font-size: 18px;
        font-weight: normal;
        position: absolute;
        pointer-events: none;
        left: 5px;
        top: 10px;
        display: flex;
      }
      
      .wave-group .label-char {
        transition: 0.2s ease all;
        transition-delay: calc(var(--index) * .05s);
      }
      
      .wave-group .input:focus ~ label .label-char,
      .wave-group .input:valid ~ label .label-char {
        transform: translateY(-20px);
        font-size: 14px;
        color: #5264AE;
      }
      
      .wave-group .bar {
        position: relative;
        display: block;
      }
      
      .wave-group .bar:before,.wave-group .bar:after {
        content: '';
        height: 2px;
        width: 0;
        bottom: 1px;
        position: absolute;
        background: #5264AE;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
      }
      
      .wave-group .bar:before {
        left: 31%;
      }
      
      .wave-group .bar:after {
        right: 50%;
      }
      
      .wave-group .input:focus ~ .bar:before,
      .wave-group .input:focus ~ .bar:after {
        width: 50%;
      }
      .label{
        width: 50%;
      }
</style>
</head>
<body>
<div class="container">
  <form action="{{route('register')}}" method="POST" class="login-form">
    @csrf
    <h2>Cadastre-se</h2>
    <div class="wave-group">
        <input type="name" id="name" name="name" class="input" value="{{old('name')}}" required>
        @error('name') <span>{{ $message }}</span> @enderror
        <span class="bar"></span>
            <label for="name" class="label">
                <span class="label-char" style="--index: 0">N</span>
                <span class="label-char" style="--index: 1">o</span>
                <span class="label-char" style="--index: 2">m</span>
                <span class="label-char" style="--index: 3">e</span>
            </label>
    </div>
    <div class="wave-group">
        <input type="Email" id="email" name="email" class="input" value="{{old('email')}}" required>
        @error('email') <span>{{ $message }}</span> @enderror
        <span class="bar"></span>
            <label for="email" class="label">
                <span class="label-char" style="--index: 0">E</span>
                <span class="label-char" style="--index: 1">m</span>
                <span class="label-char" style="--index: 2">a</span>
                <span class="label-char" style="--index: 3">i</span>
                <span class="label-char" style="--index: 4">l</span>
            </label>
    </div>
    <div class="wave-group">
        <input type="password" id="password" name="password" class="input" required>
        @error('password') <span>{{ $message }}</span> @enderror
        <span class="bar"></span>
            <label for="password" class="label">
                <span class="label-char" style="--index: 0">S</span>
                <span class="label-char" style="--index: 1">e</span>
                <span class="label-char" style="--index: 2">n</span>
                <span class="label-char" style="--index: 3">h</span>
                <span class="label-char" style="--index: 4">a</span>
            </label>
    </div>
    <div class="wave-group">
        <input type="password" id="password_confirmation" name="password_confirmation" class="input" required>
        <span class="bar"></span>
            <label for="password_confirmation" class="label">
                <span class="label-char" style="--index: 0">C</span>
                <span class="label-char" style="--index: 1">o</span>
                <span class="label-char" style="--index: 2">n</span>
                <span class="label-char" style="--index: 3">f</span>
                <span class="label-char" style="--index: 4">i</span>
                <span class="label-char" style="--index: 5">r</span>
                <span class="label-char" style="--index: 6">m</span>
                <span class="label-char" style="--index: 7">a</span>
                <span class="label-char" style="--index: 8">r</span>
                <span class="label-char" style="--index: 9">&nbsp</span>
                <span class="label-char" style="--index: 10">S</span>
                <span class="label-char" style="--index: 11">e</span>
                <span class="label-char" style="--index: 12">n</span>
                <span class="label-char" style="--index: 13">h</span>
                <span class="label-char" style="--index: 14">a</span>
            </label>
    </div>
    <br>
    <button type="submit" value="Registrar">Cadastrar</button>
  </form>
</div>
</body>
</html>