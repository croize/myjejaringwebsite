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
                  <div class="row">
                  <div class="container">
                  <form  action="/myjejaring/feature/{{$fuedit->id}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}





                      <div class="col-lg-3">
                      <label class="control-label col-md-12 col-sm-12 col-xs-12">Logo</label>
                      <input type="file" class="form-control"  name="image" >
                          <span class="fa fa- form-control-feedback " aria-hidden="true"></span>
                        </div>
                        <!--end lg 3-->
                      <div class="col-lg-2">
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12">Caption</label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" class="form-control" name="title" value="{{$fuedit->title}}">
                            </div>
                            </div>

                      </div>
                      <!--end lg 4-->
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12">Description</label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <textarea id="message" required="required" class="form-control"  data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="500" name="desc" >{{$fuedit->desc}}</textarea>
                            </div>
                          </div>
                      </div>
                      <div class="col-lg-3">
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12">link</label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" class="form-control" name="link" value="{{$fuedit->link}}">
                            </div>
                            </div>

                      </div>
                      <!--end lg 5-->




                      <div class="form-group">
                        <div class="col-md-12">
                        <center>
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <input type="submit" class="btn btn-success" value="submit">
                        </center>
                        </div>
                      </div>
                      <input type="hidden" name="_method" value="put">
                    </form>
                  </div><!--end container-->
                  </div>

                  </div>
                 </div>
              </div>
            </div>


@stop