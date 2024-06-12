<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tela de Cadastro</title>
            <link rel="stylesheet" href="../forum.css">
        </head>
        <body>
        <div class="container">
        <span>{{ session('message') }}</span>
        @if($user != null)
        <form action="{{ route('UpdateUser', [$user->id]) }}" method="POST" class="login-form">
            @csrf
            @method('put')
            <h2>Perfil</h2>
            <div class="wave-group">
                <input type="name" id="name" name="name" class="input" value="{{$user->name}}">
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
                <input type="Email" id="email" name="email" class="input" value="{{$user->email}}">
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
                <input type="password" id="password" name="password" class="input">
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
                <input type="password" id="password_confirmation" name="password_confirmation" class="input">
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


    <form action="{{route('DeleteUser', [$user->id])}}" method="POST" class="login-form">
        @csrf
        @method('delete')
        <button type="submit" value="Registrar">Excluir</button>
    </form>
    @endif
    </div>
    </body>
    </html>