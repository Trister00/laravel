@extends('Back/template')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Liste des Articles</h4>
          
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Nombre de livres
                </th>
                <th>
                  Titre
                </th>
                <th>
                  Date Creation
                </th>
                <th>
                  Editer
                </th>
                <th>
                  Supprimer
                </th>
              </thead>
              <tbody>
                  @if (count($livres)>0)
                      @foreach ($livres as $item)
                      <tr>
                            <td>
                              {{$loop->iteration}}
                            </td>
                            <td>
                               {{$item->Titre}}
                            </td>
                            <td>
                                {{date('d-m-Y', strtotime($item->created_at))}}
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{ route('admin/livres.edit', ['id' => $item->id]) }}">Editer</a>
                            </td>
                            <td>
                                    <form method="POST" action="/admin/livres/{{$item->id}}">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" type="submit">Supprimer</button>
                                    </form>
                              
                            </td>
                          </tr>
                      @endforeach
                  @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   
  </div>
@endsection