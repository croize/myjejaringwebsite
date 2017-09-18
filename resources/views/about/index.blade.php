@extends('template-admin.template-admin')
@section('content')

<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:auto;">
                  <div class="x_title">
                    <h2> Update About Myjejaring.com</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  @foreach ($sindex as $ac)
		Title : {{$ac->title}}<br>
		Describe : {{$ac->describe}}<br>
		Link : {{$ac->link}}<br>
		<img src="storage/about/{{$ac->image}}" width="300px" height="200px" alt="">
		<a href="/myjejaring/about/{{$ac->id}}/edit">Edit</a>
		@endforeach




                  </div>
                 </div>
              </div>
            </div>
@stop