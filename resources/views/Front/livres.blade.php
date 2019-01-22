@extends('Front/template')
@section('content')
    <div class="row">
        @if (count($livres) > 0)
            @foreach ($livres as $item)
            <div class="col-md-4 ">
                <div class="card ">
                    <div class="card-header card-header-danger">
                            <h4 class="card-title">{!!strlen($item->Titre) > 30 ? substr($item->Titre,0,30).'...' : $item->Titre!!}</h4>
                                
                    </div>
                    
                            <div class="card-body">
                                    <h4 class="card-title"> {{date('d-m-Y', strtotime($item->created_at))}}</h4>
                                    <div class="text-right">
                                            <a href="{{ route('livres.show', ['id' => $item->id]) }}" class="btn btn-danger">visionner le livre</a>
                                        </div>
                                  </div>
                            
                        </div>
                </div>
                
            @endforeach
        @endif
    </div>
@endsection