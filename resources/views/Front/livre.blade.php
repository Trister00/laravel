@extends('Front/template')
@section('content')
    livre ici
    
    <embed href="{{ asset('storage/livres/'.$livre->document) }}">Open the pdf!
@endsection