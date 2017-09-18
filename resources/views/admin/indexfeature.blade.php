@extends('template-admin.template-admin')
@section('content')
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel" style="height:auto;">
          <div class="x_title">
            <h2> Preview My Jejaring - Features </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
<div class="containerbut">
<section class="mbr-cards mbr-section mbr-section-nopadding" id="features6-0" style="background-color: rgb(255, 255, 255);">

    

    <div class="mbr-cards-row row">
@foreach ($inifitur as $in)
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: -40px;">
            <div class="container">
              <div class="card cart-block">
                  <div class="card-img"><img src="/storage/feature/{{$in->image}}" width="100%" height="100%"></div>
                  <div class="card-block" style="color: black;"><center>
                    <h4 class="card-title" style="text-transform: capitalize;"><b> {{$in->title}} </b></h4>
                    <p class="card-text" style="width: 100%;height: 100px;"> {{$in->desc}} </p><center>
                    <div class="card-btn"><a href="{{$in->link}}" class="btn btn-warning">MORE</a></div></center></center>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
</div><!--end container buatan -->     
          </div>
          </div>
      </div>
    </div>
<!--end live preview feature-->


    <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:auto;">
                  <div class="x_title">
                    <h2> Update Features Myjejaring.com</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<div class="col-xs-3"><label class="control-label col-md-3 col-sm-3 col-xs-3">Icon</label></div>
<div class="col-xs-2"><label class="control-label col-md-2 col-sm-2 col-xs-2">Title</label></div>
<div class="col-xs-2"><label class="control-label col-md-3 col-sm-3 col-xs-2">Description</label></div>
<div class="col-xs-2"><label class="control-label col-md-3 col-sm-3 col-xs-2">Link</label></div>
<div class="col-xs-3"><label class="control-label col-md-1 col-sm-1 col-xs-3">Action</label></div>
            <div class="container">
            <div class="row">
            <div class="col-sm-12">
            @foreach ($inifitur as $in)
            <div class="ln_solid"></div>
<div class="set-row">
            <div class="col-xs-3">
              <img src="/storage/feature/{{$in->image}}" width="100%" height="100%" alt="">
            </div>
            <div class="col-xs-2" >
                  <h4><span class="label label-default" style="text-transform: uppercase;" id="gridbtn">{{$in->title}}</span></h4>
            </div>
            <div class="col-xs-2">
{{$in->desc}}
             </div>
             <div class="col-xs-2">
             {{$in->link}}
             </div>

             <form action="/myjejaring/feature/{{$in->id}}" method="post">
             <div class="col-xs-3">

                  <a type="submit" href="/myjejaring/feature/{{$in->id}}/edit" class="btn btn-primary"> Update </a>
            
                  <button type="submit" class="btn btn-danger"> Dellete </button>
                  <input type="hidden" name="_method" value="delete">
                  <input type="hidden" name="_token" value="{{csrf_token() }}">
            

             </div>
             </form>
</div>

            @endforeach
            <div class="ln_solid"></div>
            <div class="col-lg-12" style="margin-top: 20px;">
              <center>
                  <a href="/myjejaring/feature/create"  class="btn btn-info">
                    <i class="fa fa-plus icon-white"></i> Create New Features
                  </a>
              </center>
            </div>
            </div>

                  </div>

                  </div>

                  </div>
                 </div>
              </div>
            </div>


@stop