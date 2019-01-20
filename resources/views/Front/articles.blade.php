@extends('Front/header')
@section('content')
<div class="container">
    <div class="row">
        @if (count($posts) >0)
            @foreach ($posts as $item)
                <div class="col-md-4 mt-4">
                        <div class="card h-100">
                            @if (($item->image)==null)
                            <img class="card-img-top" src="{{ asset('img/img1.jpg') }}" alt="Article image" id="img-articles">
                            @else
                            <img class="card-img-top" src="data:image/png;base64,{{base64_encode($item->image)}}" alt="Article image" id="img-articles">
                            @endif
                                <div class="card-body d-flex flex-column">
                                    <h3 class="card-title">{{$item->title}}</h3>
                                    <p class="card-text">{{str_limit($item->body, 80)}}</p>
                                    <div class="text-right align-text-bottom">
                                        <a href="/posts/{{$item->id}}" class="btn btn-primary">Lire la Suite</a>
                                    </div>
                                </div>
                        </div>
                </div>
            @endforeach
            
        @endif
          

    
    </div>
</div>
@endsection