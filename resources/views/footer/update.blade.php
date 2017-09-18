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
    <form class="" action="/myjejaring/footer/{{$editfoot->id}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="text" name="address" value="{{$editfoot->address}}"><br>
      <input type="text" name="contacts" value="{{$editfoot->contacts}}"><br>
      <input type="text" name="link" value="{{$editfoot->link}}"><br>
      <input type="file" name="imgparalax" value=""><br>
      <input type="hidden" name="vid" value="{{$editfoot->imgparalax}}">
      <input type="hidden" name="_method" value="put">
      <input type="submit" name="" value="Click This">
    </form>


 </div>
                 </div>
              </div>
            </div>


@stop