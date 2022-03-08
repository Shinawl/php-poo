@extends('layout')

@section('content')

    <div class="container my-4">
        <h1>Liste des utilisateurs</h1>

        <ul>
            @foreach($users as $user)
                <li>
                    <div class="bottom">
                        {{ $user->name }}
                        {{ $user->email }} <br>
                        <a href="{{route('users.show', $user)}}">Voir plus</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
