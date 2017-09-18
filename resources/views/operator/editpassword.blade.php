@extends('template-admin.template-admin')
@section('content')

    <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:auto;">
                  <div class="x_title">
                    <h2> Edit Account {{$sa->name}}</h2>

                    <div class="clearfix"></div>
                  </div>
<div class="x_content">
          <form class="form-horizontal form-label-left" action="/myjejaring/changepassword/{{$sa->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                      <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">New Password</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="password" class="form-control" name="password" id="past" value="" placeholder="Password">
                          <span class="fa fa-key form-control-feedback right" aria-hidden="true"></span>
                          <span id="passstrength" style="color:green;"></span>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Confirmation New Password</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confrim Password">
                          <span class="fa fa-key form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <input type="hidden" name="_method" value="put">
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-12">
                        <center>
                          <a href="/myjejaring/changepassword" class="btn btn-danger">Back</a>
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
