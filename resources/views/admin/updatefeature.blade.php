@extends('template-admin.template-admin')
@section('content')

    <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:auto;">
                  <div class="x_title">
                    <h2> Update Feature Myjejaring.com</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div class="row">
                  <div class="container">
                  <form  action="/myjejaring/feature/{{$fuedit->id}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
                      <div class="col-lg-12">
                      <label class="control-label col-md-12 col-sm-12 col-xs-12">Logo</label>
                      <input type="file" class="form-control"  name="image" >
                          <span class="fa fa- form-control-feedback " aria-hidden="true"></span>
                          <i style="text-align: left;">*format PNG 157x157 </i>
                        </div>
                        <!--end lg 3-->
                      <div class="col-lg-12">
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12">Caption</label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" class="form-control" name="title" value="{{$fuedit->title}}">
                            </div>
                            </div>

                      </div>
                      <!--end lg 4-->
                      <div class="col-lg-12">
                        <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12">Description</label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <textarea id="message" required="required" class="form-control" rows="8" cols="8" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="500" name="desc" >{{$fuedit->desc}}</textarea>
                            </div>
                          </div>
                      </div>
                      <div class="col-lg-12">
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12">link</label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3">https://</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$fuedit->link}}" name="link">
                              </div>
                            </div>
                            </div>

                      </div>
                      <!--end lg 5-->
                      <div class="form-group">
                        <div class="col-md-12">

                        <center>
                        <div class="ln_solid"></div>
                          <a href="/myjejaring/feature" class="btn btn-danger">Back</a>
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
