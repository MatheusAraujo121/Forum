<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tela de Login</title>
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
  width: 360px;
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
    width: 200px;
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
    width: 100%;
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
    left: 50%;
  }
  
  .wave-group .bar:after {
    right: 50%;
  }
  
  .wave-group .input:focus ~ .bar:before,
  .wave-group .input:focus ~ .bar:after {
    width: 50%;
  }
  .label{
    width: 100%;
  }
</style>
</head>
<body>
<div class="container">
  <form action="{{route('login')}}" method="POST" class="login-form">
    @csrf
    <h2>Login</h2>
    <div class="wave-group">
        <input type="username" id="username" name="username" class="input" required>
        <span class="bar"></span>
            <label for="username" class="label">
                <span class="label-char" style="--index: 0">U</span>
                <span class="label-char" style="--index: 1">s</span>
                <span class="label-char" style="--index: 2">u</span>
                <span class="label-char" style="--index: 3">á</span>
                <span class="label-char" style="--index: 4">r</span>
                <span class="label-char" style="--index: 5">i</span>
                <span class="label-char" style="--index: 6">o</span>
            </label>
    </div>
    <div class="wave-group">
        <input type="password" id="password" name="password" class="input" required>
        <span class="bar"></span>
            <label for="password" class="label">
                <span class="label-char" style="--index: 0">S</span>
                <span class="label-char" style="--index: 1">e</span>
                <span class="label-char" style="--index: 2">n</span>
                <span class="label-char" style="--index: 3">h</span>
                <span class="label-char" style="--index: 4">a</span>
            </label>
    </div>
    <button type="submit">Entrar</button>
  </form>
</div>
</body>
</html>