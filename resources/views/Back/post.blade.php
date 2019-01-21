@extends('Back/template')
@section('content')
          <div class="row">
            <div class="col-md-11">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Creer un  Article</h4>
                </div>
                <div class="card-body">
                  <form method="POST" action="/admin" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Titre</label>
                          <input type="text" class="form-control" name="title" >
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="editor" name="body"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                          <div class="">
                            <h3 class=""><i class="material-icons">add_photo_alternate</i> Image : </h3>
                            <input type="file" name="image">
                          </div>
                        </div>
                        
                      </div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
          @endsection