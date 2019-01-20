@extends('Front/header')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$post->title}}</h1>
                <hr>
            </div>
            <div class="col-md-12">
                <h3>Date : {{$post->created_at}}</h3>
                <hr>
            </div>
            <div class="col-md-12">
                    @if (($post->image)==null)
                    <img class="card-img-top" src="{{ asset('img/img1.jpg') }}" alt="Article image" id="img-article">
                    @else
                    <img class="card-img-top" src="data:image/png;base64,{{base64_encode($post->image)}}" alt="Article image" id="img-article">
                    @endif
                    <hr>
            </div>
            <div class="col-md-12">
                {{$post->body}}
            </div>
        </div>
        
    </div>
@endsection