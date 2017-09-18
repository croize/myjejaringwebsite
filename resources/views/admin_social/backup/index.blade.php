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
<div class="col-sm-3"><label class="control-label col-md-12 col-sm-12 col-xs-12">Select Media :</label></div>
<div class="col-sm-6"><label class="control-label col-md-12 col-sm-12 col-xs-12">Link media :</label></div>
<div class="col-sm-3"><label class="control-label col-md-12 col-sm-12 col-xs-12">Action :</label></div>

<br>
<div class="clearfix"></div>
<div class="container">

<div class="col-sm-12">
@foreach ($sindex as $in)
                  <div class="col-sm-3" id="gridbtn">
						<h4><span class="label label-success" style="text-transform: uppercase;">{{$in->name}}</span></h4>
                  </div>
                  <div class="col-sm-6">
                  			<div class="form-group">

                        	<div class="col-md-12 col-sm-12 col-xs-12">
														{{$in->link}}
                        	</div>
                      		</div>
                   </div>
                   <form action="/myjejaring/social/{{$in->id}}" method="post">
                    <div class="col-sm-3">
                          <a type="submit" href="/myjejaring/social/{{$in->id}}/edit" class="btn btn-primary">Edit</a>

                          <button type="submit" class="btn btn-info"> Dellete </button>
                  <input type="hidden" name="_method" value="delete">
                  <input type="hidden" name="_token" value="{{csrf_token() }}">



                    </div>
                    </form>
@endforeach
<div class="col-lg-12" style="margin-top: 20px;">
<div class="ln_solid"></div>
	<center>
			<a href="/myjejaring/social/create"  class="btn btn-info">
			  <i class="fa fa-plus icon-white"></i> Create New Social Media
			</a>
	</center>
</div>
</div>

                  </div>
                 </div>
              </div>
            </div>

@stop
