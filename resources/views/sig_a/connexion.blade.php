@extends('layout.app')
@section('title', 'connexion')
@section('content')
<form action="" method="post">
    @csrf
    <input type="email" placeholder="Email" requiered> <br><br>
    <input type="password" placeholder="Mot de passe" requiered>
    <input type="submit" value="Envoyer">
</form>
@endsection