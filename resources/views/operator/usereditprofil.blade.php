@extends('template-admin.template-admin')
@section('content')

    <div class="row">
<div class="col-lg-3">

                    <div class="col-xs-12">

                      <ul class="nav nav-tabs tabs-left">
                        <li class="active"><a href="/myjejaring/user/changeprofile/{{Auth::user()->id}}/edit">Edit Profile</a>
                        </li>
                        <li class="active"><a href="/myjejaring/user/changepassword/{{Auth::user()->id}}/edit">Securitty</a>
                        </li>
                      </ul>
                    </div>

</div>
<div class="col-md-9 col-sm-9 col-xs-9">
                <div class="x_panel" style="height:auto;">
                  <div class="x_title">
                    <h2> Edit Account Operator </h2>

                    <div class="clearfix"></div>
                  </div>
        <div class="x_content" style="height: 480px;">





          <form class="form-horizontal form-label-left" action="/myjejaring/user/changeprofile/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Operator</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" >
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}">
                          <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">

                          <div class="input-group {{ $errors->has('number') ? ' has-error' : '' }}">
                            <span class="input-group-btn">
                                              <button type="button" class="btn btn-danger">+62</button>
                                          </span>
                            <input type="text" class="form-control" name="number" value="{{Auth::user()->number}}">
                            @if ($errors->has('number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('number') }}</strong>
                                </span>
                            @endif
                          </div>
                          <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Image</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" name="image" class="form-control">
                          <span class="fa fa-camera-retro form-control-feedback right" aria-hidden="true"></span>
                          <i>File size : 128 x 128</i>
                        </div>
                      </div>
                      <input type="hidden" name="_method" value="put">
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-12">
                        <center>
                          <a href="/myjejaring/monitor" class="btn btn-danger">Back</a>
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
