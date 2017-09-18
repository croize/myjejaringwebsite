@extends('template-admin.template-admin')
@section('content')
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel" style="height:auto;">
              <div class="x_title">
                <h2> Preview My jejaring - Header</h2>
                <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

              <div class="row" id="viewtampilan">

                
<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-after-navbar" id="header2-0" style="background-image: url(/storage/header/{{$edithead->imgback}});">

    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);">
    </div>

    <div class="mbr-table mbr-table-full">
        <div class="mbr-table-cell">

            <div class="container">
                <div class="mbr-section row">
                <div class="batas">
                    <div class="mbr-table-md-up">
                        
                        
                        

                        <div class="mbr-table-cell mbr-right-padding-md-up col-md-5 text-xs-center text-md-right">

                            <h6 class="mbr-section-title display-2"><span style="font-weight: normal; ">
                              {{$edithead->titlehead}}
                            </span></h6>

                            <div class="mbr-section-text lead">
                                <p style="text-align: right; font-size: 14px; ">{{$edithead->deschead}}</p>
                            </div>

                            <div class="mbr-section-btn">
                                <a class="btn btn-warning" style="margin-left:170px;" href="{{$edithead->link}}">MORE</a>
                            </div>

                        </div>
                        <div class="mbr-table-cell mbr-valign-top col-md-7">
                            <div class="mbr-figure"><img src="/storage/header/{{$edithead->imgvid}}" title="Myjejaring Bumper" height="100%" width="100%"></a></div>
                        </div>

                    </div><!--end batas-->
                    </div>
                </div>
            </div>

        </div>
    </div>



    <div class="mbr-arrow mbr-arrow-floating hidden-sm-down" aria-hidden="true"><a href="#features6-0"><i class="mbr-arrow-icon"></i></a></div>
</section>



              </div>

              </div>
            </div>
        </div>
    </div>


    <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:auto;">
                  <div class="x_title">




                    <h2> Update Header Myjejaring.com</h2>

                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="/myjejaring/header/{{$edithead->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Title Header </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="titlehead" value="{{$edithead->titlehead}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Description Header</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea name="deschead" rows="8" cols="80" class="col-md-12 col-sm-12 col-xs-12">{{$edithead->deschead}}</textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Link Video</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon3">https://</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$edithead->link}}" name="link">
                      </div>
                      </div>
                      </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Image Video</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" name="imgvid" value="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Image Background</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" name="imgback" value="" class="form-control">
                        </div>
                      </div>

                      <input type="hidden" name="bck" value="{{$edithead->imgback}}">
                      <input type="hidden" name="vid" value="{{$edithead->imgvid}}">
                      <input type="hidden" name="_method" value="put">
                      <div class="ln_solid"></div>

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