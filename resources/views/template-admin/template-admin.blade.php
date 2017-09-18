

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - My jejaring</title>
    <link href="{{ url('assets/css/index.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/production/css/custom.css')}}" rel="stylesheet">
   <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="{{ url('assets/vendors/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">

    <!-- PNotify -->
    <link href="{{ url('assets/vendors/pnotify/dist/pnotify.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendors/pnotify/dist/pnotify.buttons.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendors/pnotify/dist/pnotify.nonblock.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/component.css')}}" />


  </head>
  <body class="nav-md">
    @if (Route::has('login'))
                        @if (Auth::check())
                        <div class="container body">
                          <div class="main_container">
                            <div class="col-md-3 left_col">
                              <div class="left_col scroll-view">

                                <div class="clearfix"></div>
                      			<!-- menu profile quick info -->
                                <div class="profile">
                                  <div class="profile_pic" >
                                    @if((Auth::user()->image) != 'image')
                                    <img src="/storage/user/{{Auth::user()->image}}" class='img-circle profile_img' alt="">
                                    @else
                                    <img src="/storage/user/user.png" class='img-circle profile_img' alt="">
                                    @endif
                                  </div>
                                  <div class="profile_info">
                                    <h2><b>{{ Auth::user()->name }}</b></h2>
                                    @if((Auth::user()->status)==1)
                                    <td><span class="label label-danger" style="color:white;"> Admin </span></td>
                                    @else
                                    <td><span class="label label-info"> Operator </span></td>
                                    @endif
                                  </div>
                                </div>
                                 <div class="clearfix"></div>
                                <!-- /menu profile quick info -->

                                <!-- sidebar menu -->
                                 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                                  <div class="menu_section">

                                    <ul class="nav side-menu">
                                      <li><a href="{{('/home')}}"><i class="fa fa-home"></i>Home</a></li>
                                      @if((Auth::user()->status) == 1)
                                      <li><a href="{{('/myjejaring/monitor')}}"><i class="fa fa-users"></i> Request Operator</a></li>
                                      @else
                                      <li style="display:none;"><a href="{{('/myjejaring/monitor')}}"><i class="fa fa-users"></i> Request Operator</a></li>
                                      @endif
                                      @if((Auth::user()->status) == 1)
                                      <li><a href="{{('/myjejaring/changepassword')}}"><i class="fa fa-key"></i> Change Password</a></li>
                                      @else
                                      <li style="display:none;"><a href="{{('/myjejaring/monitor')}}"><i class="fa fa-users"></i> Request Operator</a></li>
                                      @endif
                                      <li><a><i class="fa fa-edit"></i> Update <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                          <li><a href="{{ ('/myjejaring/header/1/edit')}}">Header</a></li>
                                          <li><a href="{{ ('/myjejaring/feature')}}">Features</a></li>
                                          <li><a href="{{ ('/myjejaring/about/1/edit')}}">About</a></li>
                                          <li><a href="{{ ('/myjejaring/gallery') }}">Galery</a></li>
                                          <li><a href="{{ ('/myjejaring/social')}}">Social</a></li>
                                          <li><a href="{{ ('/myjejaring/footer/1/edit')}}">Footer</a></li>
                                        </ul>
                                      </li>

                                    </ul>
                                  </div>
                                  <div class="menu_section">
                                    <h3>Live On</h3>
                                    <ul class="nav side-menu">
                                      <li><a><i class="fa fa-bug"></i> Note <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                          <li><a href="#">Note Bug</a></li>
                                      <li><a href="{{('/myjejaring/profile')}}">Profile Team</a></li>
                                        </ul>
                                      </li>

                                      <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right"> Live Preview </span></a></li>
                                    </ul>
                                  </div>

                                </div>
                                <!-- /sidebar menu -->
                              </div>
                            </div>

                            <!-- top navigation -->
                            <div class="top_nav">

                              <div class="nav_menu">
                                <nav class="" role="navigation">
                                  <div class="nav toggle">
                                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                                  </div>

                                  <ul class="nav navbar-nav navbar-right">
                                    <li class="">
                                      <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        @if((Auth::user()->image) != 'image')
                                        <img src="/storage/user/{{Auth::user()->image}}" alt=""><b>{{ Auth::user()->name}}</b>
                                        @else
                                        <img src="/storage/user/user.png" alt=""><b>{{ Auth::user()->name}}</b>
                                        @endif

                                        <span class=" fa fa-angle-down"></span>
                                      </a>
                                      <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="/myjejaring/user/changeprofile/{{Auth::user()->id}}/edit"> Settings</a></li>
                                        <li>
                                          <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout<i class="fa fa-sign-out pull-right" style="margin-top:9px;"></i></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form></li>
                                      </ul>
                                    </li>
                                  </ul>
                                </nav>
                              </div>

                            </div>
                            <!-- /top navigation -->
                                    <!-- page content -->
                            <div class="right_col" role="main">
                              <div class="lalala">
                                <div class="page-title">
                                  <div class="title_left">
                                    <h3></h3>
                                  </div>


                                </div>
                                <div class="clearfix"></div>
                                @if(Session::get('message') == NULL)
                                <div class="alert alert-success alert-dismissible fade in" role="alert" style="display:none;">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                  </button>
                                  <strong>{{ Session::get('message') }}</strong>
                                </div>
                                @else
                                <div class="alert alert-success alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                  </button>
                                  <strong>{{ Session::get('message') }}</strong>
                                </div>
                                @endif
                                @yield('content')
                              </div>
                            </div>
                            <!-- /page content -->

                            <!-- footer content -->
                            <footer>
                              <div class="pull-right">
                                Atomic Dollar code -  <a href="#">My jejaring.com</a>
                              </div>
                              <div class="clearfix"></div>
                            </footer>
                            <!-- /footer content -->
                          </div>
                        </div>
                        <script src="{{ url('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
                        <script src="{{ url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
                        <script src="{{ url('assets/vendors/fastclick/lib/fastclick.js')}}"></script>
                        <script src="{{ url('assets/vendors/nprogress/nprogress.js')}}"></script>
                        <script src="{{ url('assets/production/js/custom.js')}}"></script>
                       <!-- Dropzone.js -->
                        <script src="{{ url('assets/vendors/dropzone/dist/min/dropzone.min.js')}}"></script>

                        <script src="{{ url('assets/js/Chart.js')}}"></script>


                        <script src="{{ url('assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
                        <script src="{{ url('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

                        <script src="{{ url('assets/vendors/iCheck/icheck.min.js')}}"></script>
                        <!-- PNotify -->
                        <script src="{{ url('assets/vendors/pnotify/dist/pnotify.js')}}"></script>
                        <script src="{{ url('assets/vendors/pnotify/dist/pnotify.buttons.js')}}"></script>
                        <script src="{{ url('assets/vendors/pnotify/dist/pnotify.nonblock.js')}}"></script>
                        <script src="{{ url('/assets/js/custom-file-input.js')}}"></script>

                        <!-- Datatables -->

                    <script type="text/javascript">
                      $(document).ready(function(){
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }

                        $('#ini').click(function(){
                            $.ajax({
                             url:'myjejaring/ajax',
                             type:'POST',
                             data: {
                              '_token': $('input[name=_token]').val(),
                              'title': $('input[name=title]').val(),
                              'desc': $('input[name=desc]').val(),
                              'link': $('input[name=link]').val(),
                              'image': $('input[name=image]').val(),


                              success: function(response){ // What to do if we succeed
                            console.log(response);
                        },
                        error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                            console.log(JSON.stringify(jqXHR));
                            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                        }
                              },


                            });
                        });
                    });
                    </script>


                        <script>
                          $(document).ready(function() {
                            var handleDataTableButtons = function() {
                              if ($("#datatable-buttons").length) {
                                $("#datatable-buttons").DataTable({
                                  dom: "Bfrtip",
                                  buttons: [
                                    {
                                      extend: "copy",
                                      className: "btn-sm"
                                    },
                                    {
                                      extend: "csv",
                                      className: "btn-sm"
                                    },
                                    {
                                      extend: "excel",
                                      className: "btn-sm"
                                    },
                                    {
                                      extend: "pdfHtml5",
                                      className: "btn-sm"
                                    },
                                    {
                                      extend: "print",
                                      className: "btn-sm"
                                    },
                                  ],
                                  responsive: true
                                });
                              }
                            };

                            TableManageButtons = function() {
                              "use strict";
                              return {
                                init: function() {
                                  handleDataTableButtons();
                                }
                              };
                            }();

                            $('#datatable').dataTable();
                            $('#datatable-keytable').DataTable({
                              keys: true
                            });

                            $('#datatable-responsive').DataTable();

                            $('#datatable-scroller').DataTable({
                              ajax: "js/datatables/json/scroller-demo.json",
                              deferRender: true,
                              scrollY: 380,
                              scrollCollapse: true,
                              scroller: true
                            });

                            var table = $('#datatable-fixed-header').DataTable({
                              fixedHeader: true
                            });

                            TableManageButtons.init();
                          });
                        </script>
                        <!-- /Datatables -->
                        <script type="text/javascript">
                      $("#anchorID")[0].click();
                    </script>

                    <script type="text/javascript">
                    function show() {
                        var p = document.getElementById('pwd');
                        p.setAttribute('type', 'text');
                    }

                    function hide() {
                        var p = document.getElementById('pwd');
                        p.setAttribute('type', 'password');
                    }

                    var pwShown = 0;

                    document.getElementById("eye").addEventListener("click", function () {
                        if (pwShown == 0) {
                            pwShown = 1;
                            show();
                        } else {
                            pwShown = 0;
                            hide();
                        }
                    }, false);
                    </script>
                        <script>
                          $(document).ready(function() {
                            var cnt = 10;

                             TabbedNotification = function(options) {
                              var message = "<div id='ntf" + cnt + "' class='text alert-" + options.type + "' style='display:none'><h2><i class='fa fa-bell'></i> " + options.title +
                                "</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>" + options.text + "</p></div>";

                              if (!document.getElementById('custom_notifications')) {
                                alert('doesnt exists');
                              } else {
                                $('#custom_notifications ul.notifications').append("<li><a id='ntlink" + cnt + "' class='alert-" + options.type + "' href='#ntf" + cnt + "'><i class='fa fa-bell animated shake'></i></a></li>");
                                $('#custom_notifications #notif-group').append(message);
                                cnt++;
                                CustomTabs(options);
                              }
                            };

                             CustomTabs = function(options) {
                              $('.tabbed_notifications > div').hide();
                              $('.tabbed_notifications > div:first-of-type').show();
                              $('#custom_notifications').removeClass('dsp_none');
                              $('.notifications a').click(function(e) {
                                e.preventDefault();
                                var $this = $(this),
                                  tabbed_notifications = '#' + $this.parents('.notifications').data('tabbed_notifications'),
                                  others = $this.closest('li').siblings().children('a'),
                                  target = $this.attr('href');
                                others.removeClass('active');
                                $this.addClass('active');
                                $(tabbed_notifications).children('div').hide();
                                $(target).show();
                              });
                            };

                            CustomTabs();

                            var tabid = idname = '';

                            $(document).on('click', '.notification_close', function(e) {
                              idname = $(this).parent().parent().attr("id");
                              tabid = idname.substr(-2);
                              $('#ntf' + tabid).remove();
                              $('#ntlink' + tabid).parent().remove();
                              $('.notifications a').first().addClass('active');
                              $('#notif-group div').first().css('display', 'block');
                            });
                          });
                        </script>
                        <!-- /PNotify -->
                        <script>
                          $(document).ready(function() {
                            autosize($('.resizable_textarea'));
                          });
                        </script>
                        <script type="text/javascript">
                          $('#past').keyup(function(e) {
                             var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
                             var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
                             var enoughRegex = new RegExp("(?=.{6,}).*", "g");
                             if (false == enoughRegex.test($(this).val())) {
                                     $('#passstrength').html('More Characters');
                             } else if (strongRegex.test($(this).val())) {
                                     $('#passstrength').className = 'ok';
                                     $('#passstrength').html('Strong!');
                             } else if (mediumRegex.test($(this).val())) {
                                     $('#passstrength').className = 'alert';
                                     $('#passstrength').html('Medium!');
                             } else {
                                     $('#passstrength').className = 'error';
                                     $('#passstrength').html('Weak!');
                             }
                             return true;
                        });

                        </script>
                        @else
                        ERROR
    @endif
    @endif
      </body>
</html>
