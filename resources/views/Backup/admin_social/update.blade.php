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


    <form class="" action="/myjejaring/social/{{$social->id}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$social->id}}">
      <select class="" name="name">
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
      </select><br>
      <input type="text" name="link" value="{{$social->link}}"><br>
      <input type="hidden" name="_method" value="put">
      <input type="submit" name="" value="Submit">
    </form>


                      </div>
                 </div>
              </div>
            </div>

   <!-- PNotify -->
@stop
