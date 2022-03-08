@extends('layout')

@section('content')

    <h1>Update un utilisateur</h1>

    <form action="{{route('users.update', $user)}}" method="POST" class="my-3">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="text my-3 col">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" class="form-control" value="{{$user->name}}">
            </div>
            <div class="text my-3 col">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" class="form-control" value="{{$user->email}}">
            </div>
        </div>
        <input class="btn btn-primary" type="submit" id="submit" value="Ajouter l'utilisateur">
    </form>

@endsection
