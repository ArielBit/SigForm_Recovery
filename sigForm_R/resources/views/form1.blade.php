@extends('layout.app')
@section('title','afficher')

@foreach($sigr as @sigrs)
<h2>Données</h2>
<p>Moi:{{$sigrs->ok}}</p>
<p>Pour:{{$sigrs->po}}</p>
@endforeach 
