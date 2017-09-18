@include('notification')
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

                    <form class="form-horizontal form-label-left" action="/myjejaring/header/{{$edithead->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Title Header </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="titlehead" value="{{$edithead->titlehead}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Description Header</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea name="deschead" rows="8" cols="80" class="col-md-12 col-sm-12 col-xs-12">{{$edithead->deschead}}</textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Link Video</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon3">https://</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$edithead->link}}" name="link">
                      </div>
                      </div>
                      </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Image Video</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" name="imgvid" value="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Image Background</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" name="imgback" value="" class="form-control">
                        </div>
                      </div>

                      <input type="hidden" name="bck" value="{{$edithead->imgback}}">
                      <input type="hidden" name="vid" value="{{$edithead->imgvid}}">
                      <input type="hidden" name="_method" value="put">
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-12">
                        <center>
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <input type="submit" class="btn btn-success" value="submit">
                        </center>
                        </div>
                      </div>

                    </form>

                  </div>
                 </div>
              </div>
            </div>


@stop
