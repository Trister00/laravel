@extends('Front/template')
@section('content')
    
        <div class="row">
            <div class="col-md-12">
                <h1>{{$post->title}}</h1>
                <hr>
            </div>
            <div class="col-md-12">
                <h3>Date : {{date('d-m-Y', strtotime($post->created_at))}}</h3>
                <hr>
            </div>
            <div class="col-md-12">
                    @if (($post->image)==null)
                    <img class="card-img-top" src="{{ asset('img/img1.jpg') }}" alt="Article image" id="img-article">
                    @else
                    <img  src="{{ asset('storage/articles/'.$post->image) }}" alt="Article image" id="img-article" class="d-block w-100">
                    @endif
                    <hr>
            </div>
            <div class="col-md-12">
                {!!$post->body!!}
            </div>
        </div>
        
    
@endsection