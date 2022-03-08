@extends('layout')

@section('content')

    <div class="container">
        <h1>Ajouter un utilisateur</h1>
        <form action="{{route('users.store')}}" method="POST" class="my-3">
            @csrf
            <div class="form-row">
                <div class="text my-3 col">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror">
                </div>
                <div class="text my-3 col">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror">
                </div>
                <div class="text my-3 col">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror">
                </div>
            </div>
            <input class="btn btn-primary" type="submit" id="submit" value="Ajouter l'utilisateur">
        </form>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @error('name', 'email', 'password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

@endsection
