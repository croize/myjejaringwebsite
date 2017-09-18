@extends('template-admin.template-admin')
@section('content')

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
              
<input type="file" name="imgparalax" value=""><br>
      <input type="hidden" name="vid" value="{{$editfoot->imgparalax}}">
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