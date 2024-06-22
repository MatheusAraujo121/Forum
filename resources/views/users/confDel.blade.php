
@extends('layouts.liop')

@section('title', 'Confirmar exclusão')


@section('content')


    <div class="headers">
        <div class="images"><svg aria-hidden="true" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none">
                    <path d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
        </div>
        <div class="contents">
        <span class="titlesd">Desativar conta</span>
        <p class="messages">Você tem certeza que deseja desativar a conta? Todos os dados serão permanentemente removidos. Está ação não pode ser desfeita.</p>
        </div>
        <div class="actionsa">
            <form action="{{route('DeleteUser', [Auth::user()->id])}}" method="POST" class="lgn-3">
            @csrf
            @method('delete')
                <a class="lgn-3" href="{{route('DeleteUser', [Auth::user()->id])}}"><button class="desactivates" type="submit">Desativar</button></a>
            </form>
            <a class="lgn-3" href="{{ route('routeListUserByIDS', [Auth::user()->id]) }}"><button class="cancels" type="button">Cancelar</button></a>
        </div>
    </div>

@endsection