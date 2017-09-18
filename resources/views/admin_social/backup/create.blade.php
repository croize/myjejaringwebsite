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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                    action="/myjejaring/social" method="post">
                    {{csrf_field()}}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">SocialMedia</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="name">
                            <option value="facebook">Facebook</option>
        <option value="twitter">Twitter</option>
        <option value="instagram">Instagram</option>
        <option value="google">Google +</option>
        <option value="youtube">Youtube</option>
        <option value="pinterest">Pinterest</option>
        <option value="tumblr">Tumblr</option>
        <option value="linkedin">Linkedin</option>
        <option value="vkontakte">Vkontakte</option>
        <option value="odnoklassniki">Odnoklassniki</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Link Media</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="link">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <center>
                        <a href="/myjejaring/social" class="btn btn-danger">Back</a>
                          <button type="reset" class="btn btn-primary">Clear Form</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </center>
                        </div>
                      </div>

                    </form>

                  </div>
                 </div>
              </div>
            </div>

   <!-- PNotify -->
@stop