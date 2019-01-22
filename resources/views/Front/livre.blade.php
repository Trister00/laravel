@extends('Front/template')
@section('content')
    livre ici
    
    <a href="{{ asset('storage/livres/'.$livre->document) }}"  target="_blank">Ouvrir le fichier</a>
@endsection