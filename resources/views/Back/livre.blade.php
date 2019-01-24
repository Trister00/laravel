@extends('Back/template')
@section('content')
          <div class="row">
            <div class="col-md-11">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Nouveau Livre</h4>
                </div>
                <div class="card-body">
                  <form method="POST" action="/admin/livres" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Titre</label>
                          <input type="text" class="form-control" name="Titre" >
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                          <div class="">
                            <h3 class=""><i class="material-icons">book</i> Importer un Livre : </h3>
                            <input type="file" name="document">
                          </div>
                        </div>
                        
                      </div>
                    <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
          @endsection