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
                <div class="x_panel" style="height: 550px;">
                  <div class="x_title">
                    <h2>Setting Security Account<small>- Change Password Account</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form id="demo-form2" method="post" data-parsley-validate class="form-horizontal form-label-left" action="/myjejaring/user/changepassword/{{Auth::user()->id}}">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">New Password<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="col-lg-11 {{ $errors->has('password') ? ' has-error' : '' }}">
                          <input type="password" id="past" required="required" class="form-control first" name="password">
                          <span id="passstrength" style="color:green;"></span>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                        </div>
                          <div class="col-lg-1">
                          <b>
                          <span id="passstrength" style="color:green;"></span></div>   </b>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Re-password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="col-lg-11">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confrim Password">
                        </div>

                        </div>
                      </div>

                      <input type="hidden" name="_method" value="put">
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-danger">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>



                  </div>
                </div>
              </div>
            </div>
@stop
