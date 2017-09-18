<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{ url('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ url('assets/css/login.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/login-two.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">

		      <form class="form-login" role="form" method="POST" action="{{ route('register') }}">
            {{csrf_field()}}
		        <h2 class="form-login-heading"> Register - Operator </h2>
		        <div class="login-wrap">
              <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="name" type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" autofocus>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              </div>
		            <br>
                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                  <input id="email" type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" autofocus>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
                <br>
                <div class="{{ $errors->has('number') ? ' has-error' : '' }}">
                    <input type="text" id="number" class="form-control" placeholder="Phone Number" name="number" value="62" autofocus>
                    @if ($errors->has('number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('number') }}</strong>
                        </span>
                    @endif
                </div>
                <br>
                <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" id="password" class="form-control" name="password" placeholder="password" autofocus>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <br>
		            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confrim Password">
		            <input type="hidden" name="status" value="0"><input type="hidden" name="akses" value="0">
                <input type="hidden" name="image" value="image">
		            <hr style="margin-top: 50px;">
		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Create Account</button>
		        </div>
		      </form>

	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ url('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{ url('assets/js/jquery.backstretch.min.js')}}"></script>
    <script>
        $.backstretch("/assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
