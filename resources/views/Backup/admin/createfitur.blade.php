@extends('template-admin.template-admin')
@section('content')

    <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:auto;">
                  <div class="x_title">
                    <h2> Update Header Myjejaring.com</h2>

                    <div class="clearfix"></div>
                  </div>
<div class="x_content">
          <form class="form-horizontal form-label-left" action="/myjejaring/feature" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Title</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'"
                          name="title">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Deskripsi</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea id="message" required="required" class="form-control" name="desc" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="500" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>

                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Link</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask': '99-999999'"
                          name="link">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">image</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" name="image" class="form-control" value="" >
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                  

                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-12">
                        <center>
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </center>
                        </div>
                      </div>

                    </form>
                  </div><!--end x contenten-->


                 </div>
              </div>
            </div>


@stop
