@extends('template-admin.template-admin')
@section('content')
 <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel" style="height:auto;">
          <div class="x_title">
            <h2> Preview My Jejaring - About </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


<section class="mbr-section article mbr-parallax-background" id="msg-box8-d" style="background-image: url(/storage/about/{{$editabout->image}}); width: 100%;height: 100%;  padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h1 class="mbr-section-title display-2" style="color: #fff;text-transform: capitalize;"> {{$editabout->title}} </h1>
            </div>
        </div>
    </div>

</section>

<section class="mbr-section article mbr-section__container" id="content2-4" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="padding: 100px; width: 100%; height: 100%;
            color: black; font-size: 17px; "><p>
            {{$editabout->describe}}
            </p></div><center>
            <div class="text-xs-center" id="gridbtn">
                    <a class="btn btn-warning" id="btnset" href="{{$editabout->link}}" target="_blank">DOWNLOAD GOOGLE PLAY</a>
                    <a class="btn btn-primary-outline btn-primary" id="butnblack" href="#" target="_blank">MYJEJARING IN WEBSITE</a>
                </div>
                </center>
            </div>
        </div>


</section>



          </div>
          </div>
      </div>
    </div>
<!--end live preview feature-->







<div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:auto;">
                  <div class="x_title">

                    <h2> Update About Myjejaring.com</h2>

                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="/myjejaring/about/{{$editabout->id}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Title</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'"
                          name="title" value="{{$editabout->title}}">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Deskripsi</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea id="message" required="required" class="form-control" name="describe" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="500" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10">{{$editabout->describe}}</textarea>

                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Link</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask': '99-999999'"
                          name="link" value="{{$editabout->link}}">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">image</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" name="image" class="form-control" value="" >
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                          <i>*format PNG 1349x329 </i>
                        </div>
                      </div>

                      <input type="hidden" name="_method" value="put">
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-12">
                        <center>
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </center>
                        </div>
                      </div>

                    </form>
                  </div><!--end x contenten-->
                  </div>
                 </div>
              </div>
            </div>
@stop
