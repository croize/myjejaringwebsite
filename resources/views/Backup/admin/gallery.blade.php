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
@foreach ($gallery as $in)

                    <div class="col-lg-3" id="gridgalery">
                        <img src="/storage/gallery/{{$in->image}}" width="100%" height="100%" alt="">
                          <div class="col-md-7 col-sm-12 col-xs-12" id="sizegalery">
                            <input type="text" class="form-control" placeholder="Title" name="title" value="{{$in->title}}">
                          </div>
                          <div class="col-md-5 col-sm-12 col-xs-12" id="sizegalery">

                            <a type="reset" class="btn btn-primary" href="/myjejaring/gallery/{{$in->id}}/edit">edit</a>
                          </div>

                    </div>
@endforeach
<div class="ln_solid" style="margin-top: 500px"></div>


<center>
                    <button class="btn btn-app" id="clrbtn1" type="reset">
                      <i class="fa fa-repeat"></i> reset
                    </button>
                    <button class="btn btn-app" id="clrbtn2" type="submit">
                      <i class="fa fa-save" type="submit" ></i> Save
                    </button>
</center>


                  </div>
                 </div>
              </div>
            </div>

   <!-- PNotify -->

@stop
