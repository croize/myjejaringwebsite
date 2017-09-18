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
<div class="col-sm-3"><label class="control-label col-md-3 col-sm-3 col-xs-3">Icon :</label></div>
<div class="col-sm-2"><label class="control-label col-md-2 col-sm-2 col-xs-2">Title</label></div>
<div class="col-sm-2"><label class="control-label col-md-3 col-sm-3 col-xs-3">Description</label></div>
<div class="col-sm-2"><label class="control-label col-md-3 col-sm-3 col-xs-3">Link</label></div>
<div class="col-sm-3"><label class="control-label col-md-1 col-sm-1 col-xs-1">Action</label></div>


            <div class="container">
            <div class="row">
            <div class="col-sm-12">
            @foreach ($inifitur as $in)

            <div class="col-xs-3">
              <img src="/storage/feature/{{$in->image}}" width="10px" height="10px" alt="">
            </div>
            <div class="col-xs-2" id="gridbtn">
                  <h4><span class="label label-default" style="text-transform: uppercase;">{{$in->title}}</span></h4>
            </div>
            <div class="col-xs-2">
                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" value="{{$in->desc}}">
                  </div>
                </div>
             </div>
             <div class="col-xs-2">
                  <input type="text" class="form-control" value="{{$in->link}}">
             </div>

             <form action="/myjejaring/feature/{{$in->id}}" method="post">
             <div class="col-xs-3">
                  <a type="submit" href="#updatemodal" data-toggle="modal" class="btn btn-primary"> Update </a>
                  <button id="delletemodal" type="button" class="btn btn-danger"> Dellete </button>
                  <input type="hidden" name="_method" value="delete">
                  <input type="hidden" name="_token" value="{{csrf_token() }}">


             </div>
             </form>

            @endforeach
            <div class="col-lg-12" style="margin-top: 20px;">
            <div class="ln_solid"></div>
              <center>
                  <a href="#createmodal"  data-toggle="modal"  class="btn btn-info">
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


  <div id="updatemodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
    <form class="form-horizontal" role="form" action="/myjejaring/feature/{{$in->id}}/edit">
       <input type="text" id="isbn" name="isbn" value="" placeholder="isbn"  class="form-control placeholder-no-fix"> <br>
              <input type="text" id="nama_buku" name="nama_buku" value="" placeholder="nama buku"  class="form-control placeholder-no-fix"> <br>
    </form>
          <div class="modal-footer">
            <button type="button" class="btn actionBtn" data-dismiss="modal">
              <span id="footer_action_button" class='glyphicon'> </span>
            </button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">
              <span class='glyphicon glyphicon-remove'></span> Close
            </button>
          </div>
        </div>
      </div>
     </div>
  </div>

  <div id="createmodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Create Feature</h4>
        </div>
        <div class="modal-body">
    <form class="form-horizontal" role="form" action="/myjejaring/feature/insert" method="post" enctype="multipart/form-data"> {{csrf_field()}}
        <input type="text" id="title" name="title" value="" placeholder="Title"  class="form-control placeholder-no-fix"> <br>

        <textarea id="desc" name="desc" required="required" class="form-control" placeholder="Deskripsi"></textarea> <br>

        <input type="text" id="link" name="link" value="" placeholder="Link"  class="form-control placeholder-no-fix"> <br>
        <div class="form-group">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="file" name="image" class="form-control" value="" >
          </div>
        </div>


    </form>
         <div class="modal-footer">
            <button type="button" class="btn btn-info" id="klik" data-dismiss="modal">
              <span class='glyphicon glyphicon-remove' class='glyphicon'></span>Submit
            </button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">
              <span class='glyphicon glyphicon-remove'></span> Close
            </button>
          </div>
        </div>
      </div>
     </div>
  </div>






@stop
