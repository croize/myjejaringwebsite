@extends('template-admin.template-admin')
@section('content')



    <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:auto;">
                  <div class="x_title">
                    <h2> Social Myjejaring.com</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<form data-parsley-validate class="form-horizontal form-label-left" action="/myjejaring/social/{{$social->id}}" method="post" enctype="multipart/form-data" >
{{csrf_field()}}

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Social Media <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="name">
                                  <option value="facebook"     <?php if ($social['name'] == "facebook") {echo "selected"; } ?>  >Facebook</option>
                                  <option value="twitter"   <?php if ($social['name'] == "twitter") {echo "selected"; } ?>  >Twitter</option>
                                  <option value="instagram"   <?php if ($social['name'] == "instagram") {echo "selected"; } ?>  >Instagram</option>
                                  <option value="google" <?php if ($social['name'] == "google") {echo "selected"; } ?>
                                      >Google +</option>
                                  <option value="youtube"   <?php if ($social['name'] == "youtube") {echo "selected"; } ?>  >Youtube</option>
                                  <option value="pinterest"   <?php if ($social['name'] == "pinterest") {echo "selected"; } ?>  >Pinterest</option>
                                  <option value="tumblr"   <?php if ($social['name'] == "tumblr") {echo "selected"; } ?>  >Tumblr</option>
                                  <option value="linkedin"   <?php if ($social['name'] == "linkedin") {echo "selected"; } ?>  >Linkedin</option>
                                  <option value="vkontakte"   <?php if ($social['name'] == "vkontakte") {echo "selected"; } ?>  >Vkontakte</option>
                                  <option value="odnoklassniki"   <?php if ($social['name'] == "odnoklassniki") {echo "selected"; } ?>  >Odnoklassniki</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Link Media <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="link" value="{{$social->link}}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                          <input type="hidden" name="_method" value="put">
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="/myjejaring/social" class="btn btn-danger">Back</a>
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>



                    </form>





                      </div>
                 </div>
              </div>
            </div>

   <!-- PNotify -->
@stop
