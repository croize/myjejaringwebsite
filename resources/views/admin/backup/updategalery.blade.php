@extends('template-admin.template-admin')
@section('content')



    <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:auto;">
                  <div class="x_title">
                    <h2> Galery Myjejaring.com</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div class="col-lg-12">
                  <div class="row">
                  <div class="container"><center>
    <form class="" action="/myjejaring/gallery/{{$editga->id}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Title Header </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="title" value="{{$editga->title}}" >
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3"> Image </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" name="image" class="form-control" name="title" >
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                          </div>
                      </div>

                      <input type="hidden" name="_method" value="put">
                      <div class="form-group">
                        <div class="col-md-12">
                        <center>
                        <div class="ln_solid"></div>
                          <a href="/myjejaring/gallery" class="btn btn-danger">Back</a>
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <input type="submit" class="btn btn-success" value="submit">
                        </center>
                        </div>
                      </div>
    </form>
    </center>
    </div>
    </div>
    </div><!--end col 12-->
     
                  </div>
                 </div>
              </div>
            </div>

   <!-- PNotify -->

@stop