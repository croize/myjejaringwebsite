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
                      <div class="col-md-3 col-xs-6">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="/storage/gallery/{{$in->image}}" alt="image" />
                            <div class="mask">
                              <p>Your Text</p>
                              <div class="tools tools-bottom">
                                <a href="/myjejaring/gallery/{{$in->id}}/edit"><i class="fa fa-pencil"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p name="title">{{$in->title}}</p>
                          </div>
                        </div>
                      </div>

@endforeach

                              
                  </div>
                 </div>
              </div>
            </div>

   <!-- PNotify -->

@stop