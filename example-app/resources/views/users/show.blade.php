@extends('layout')

@section('content')

<h1>{{$user->name}}</h1>
<h2>{{$user->email}}</h2>
    <a href="{{route('users.edit', $user)}}">éditer l'utilisateur</a>

    <form action="{{route('users.destroy', $user)}}" method="POST">
        @method('DELETE')
        @csrf
        <button>Supprimer l'utilisateur</button>
    </form>

@endsection
