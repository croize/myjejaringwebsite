@extends('template-admin.template-admin')
@section('content')
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel" style="height:auto;">
            <div class="x_title">
            <h2> Preview My Jejaring - Footer </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
              <div class="x_content">

<section class="mbr-section mbr-section-md-padding mbr-parallax-background" id="social-buttons2-a" style="background-image: url(/storage/footer/{{$editfoot->imgparalax}}); padding-top: 90px; padding-bottom: 250px; background-size: 100%;">
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
            
            </div>
        </div>
    </div>
</section>
<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-0" style="background-color: rgb(46, 46, 46); padding-top: 30px; padding-bottom: 30px;">
    
    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><a href="index-2.html"><img src="{{ url('logo.png')}}" alt="myjejaring" title="myjejaring" style="padding-left: 30px;"></a></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3" style="font-size: 16px;">
                <p><strong>Address</strong></p>
                <p style="color: white;">{{$editfoot->address}}</p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3" style="font-size: 16px;">
                <p><strong>Contacts</strong></p>
                <p style="color: white;">{{$editfoot->contacts}}</p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3" style="font-size: 16px;">
                <p><strong>Links</strong></p>
                <p style="color: white;">{{$editfoot->link}}</p>
            </div>
        </div>
    </div>

</section>

<div class="col-sm-12" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">
<center>
        <p class="text-xs-center" style="color: white;">Copyright (c) 2016 shaffindo megakreassi</p>
</center>
</div>
        
             

            </div>
        </div>
    </div>
    </div>
<!--end live preview-->



		<div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:auto;">
                  <div class="x_title">
                    <h2> Footer Myjejaring.com</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">



  


<div class="col-lg-4">
  <form id="demo-form" data-parsley-validate action="/myjejaring/footer/{{$editfoot->id}}" method="post" enctype="multipart/form-data" >
  {{csrf_field()}}
            <label for="fullname">Label</label>
                    <input type="text" id="fullname" class="form-control"  value="Address"  disabled />
                    <label for="message">description</label>
                    <textarea id="message" required="required" class="form-control"  data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." name="address" value="{{$editfoot->address}}">{{$editfoot->address}}</textarea>
                    <br/>
                
           
</div>
<div class="col-lg-4">

            <label for="fullname">Label</label>
                    <input type="text" id="fullname" class="form-control"  value="Contacts" disabled />
                    <label for="message">description</label>
                    <textarea id="message" required="required" class="form-control"  data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10" 
                            name="contacts">{{$editfoot->contacts}}</textarea>
                    <br/>
          </div>
          <div class="col-lg-4">
            <label for="fullname">Label</label>
                    <input type="text" id="fullname" class="form-control"  value="Links" disabled />
                    <label for="message">description</label>
                    <textarea id="message" required="required" class="form-control" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10" 
                            name="link">{{$editfoot->link}}</textarea>
                    <br/>     
              </div>

              <div class="col-lg-4"></div>
              <div class="col-lg-4"><center>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="file" name="imgparalax" value="" class="form-control">
                          <i>*format PNG,JPG 1349x309 </i>
                        </div>
                  <input type="hidden" name="vid" value="{{$editfoot->imgparalax}}">
                  <input type="hidden" name="_method" value="put">
                  </center>
              </div>
              <div class="col-lg-4"></div>
              
      <input type="hidden" name="vid" value="{{$editfoot->imgparalax}}">
      <input type="hidden" name="_method" value="put">

<div class="ln_solid" style="margin-top: 350px;"></div>

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