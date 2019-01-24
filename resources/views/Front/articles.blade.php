@extends('Front/template')
@section('content')
<div class="row ">
    <div class="col-md-12">
        {{$posts->links()}}
    </div>
</div>
    <div class="row">
        @if (count($posts) >0)
            @foreach ($posts as $item)
                <div class="col-md-4 ">
                        <div class="card" style="width : 20 rem;">
                             
                            @if (($item->image)==null)
                            
                               
                           
                             <img class="card-img-top " src="{{ asset('img/img1.jpg') }}" alt="Article image" id="img-articles" style="height:12rem;"> 
                            @else
                           
                            <img class="card-img-top" src="storage/articles/{{$item->image}}" alt="Article image" id="img-articles" style="height:12rem;">
                            @endif
                                        
                                    {{-- <h3 class="card-title">{{$item->title}}</h3> --}}
                                    {{-- <p class="card-text">{!!str_limit($item->body, 50)!!}</p> --}}
                                    <div class="card-body">
                                            <h4 class="card-title">{!!strlen($item->title) > 30 ? substr($item->title,0,30).'...' : $item->title!!}</h4>
                                            <h4 class="card-text"> {{date('d-m-Y', strtotime($item->created_at))}}</h4>
                                            <div class="text-right">
                                                    <a href="{{ route('posts.show', ['id' => $item->id]) }}" class="btn btn-danger">Lire l'article</a>
                                                </div>
                                          </div>
                                    
                                </div>
                        </div>
                        
            @endforeach
            
        @endif
    </div>
@endsection


