@extends('Back/template')
@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Liste des Articles</h4>
              <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      Nombre d'articles
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
                      @if (count($posts)>0)
                          @foreach ($posts as $item)
                          <tr>
                                <td>
                                  {{$loop->iteration}}
                                </td>
                                <td>
                                   {{$item->title}}
                                </td>
                                <td>
                                    {{date('d-m-Y', strtotime($item->created_at))}}
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('admin.edit', ['id' => $item->id]) }}">Editer</a>
                                </td>
                                <td>
                                        <form method="POST" action="/admin/{{$item->id}}">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger" type="submit">Delete</button>
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
