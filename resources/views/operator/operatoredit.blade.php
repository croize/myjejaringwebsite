@extends('template-admin.template-admin')
@section('content')

    <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:auto;">
                  <div class="x_title">
                    <h2> Edit Account Operator </h2>

                    <div class="clearfix"></div>
                  </div>
<div class="x_content">
          <form class="form-horizontal form-label-left" action="/myjejaring/monitor/{{$sa->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Operator</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="name" value="{{$sa->name}}" >
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="email" value="{{$sa->email}}">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-9 {{ $errors->has('number') ? ' has-error' : '' }}">
                          <div class="input-group">
                            <span class="input-group-btn">
                                              <button type="button" class="btn btn-danger">+62</button>
                                          </span>
                            <input type="text" id="number" class="form-control" placeholder="Phone Number" name="number" value="{{$sa->number}}" autofocus>
                          </div>
                          <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          @if ($errors->has('number'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('number') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Image</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" name="image" class="form-control" value="{{$sa->image}}" >
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                          <i>File size : 128 x 128</i>
                        </div>

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Akses</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select id="heard" class="form-control" name="akses">
                            <option value="0" @if(($sa->akses)==0)selected @endif>Tidak Memiliki Akses</option>
                            <option value="1" @if(($sa->akses)==1)selected @endif>Memiliki Akses</option>
                          </select>
                        </div>
                      </div>
                      <input type="hidden" name="_method" value="put">
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-12">
                        <center>
                          <a href="/myjejaring/monitor" class="btn btn-danger">Back</a>
                          <input type="reset" class="btn btn-primary">
                          <input type="submit" class="btn btn-success">
                        </center>
                        </div>
                      </div>

                    </form>
                  </div><!--end x contenten-->


                 </div>
              </div>
            </div>


@stop
