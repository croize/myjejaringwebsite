@extends('template-admin.template-admin')
@section('content')

    <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:auto;">
                  <div class="x_title">




                    <h2> Update Header Myjejaring.com</h2>

                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

@foreach ($sindex as $in)
<hr>
  {{$in->address}}<br>
  {{$in->contacts}}<br>
  {{$in->link}}<br>

  <img src="storage/footer/{{$in->imgparalax}}" width="300px" height="200px" alt="">
  <a href="/myjejaring/footer/{{$in->id}}/edit">Edit</a>
  <hr>
@endforeach


 </div>
                 </div>
              </div>
            </div>


@stop
