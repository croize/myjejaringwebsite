@extends('template-admin.template-admin')
@section('content')
    <div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Request Activication Operator Account</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="text-align:center;">Name</th>
                          <th style="text-align:center;">Number Phone</th>
                          <th style="text-align:center;">Email</th>
                          <th style="text-align:center;">Status</th>
                          <th style="text-align:center;">Akses</th>
                          <th style="text-align:center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($user as $in)
                        <tr>
                          <td>{{$in->name}}</td>
                      		<td>{{$in->number}}</td>
                      		<td>{{$in->email}}</td>
                          @if(($in->status)==1)
                          <td><center><span class="label label-danger"> Admin </span><center/></td>
                          @else
                          <td><center><span class="label label-info"> Operator </span><center/></td>
                          @endif

                          @if(($in->akses)==1)
                          <td>Aktif</td>
                          @else
                          <td>Tidak aktif</td>
                          @endif
                      		<td>
                            <form class="" action="/myjejaring/monitor/{{$in->id}}" method="post">
                              <a class="btn btn-primary btn-xs" href="/myjejaring/monitor/{{$in->id}}/edit">
                                  <i class='fa fa-pencil' style="color: white"></i>
                              </a>

                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="delete">
                                <button class="btn btn-danger btn-xs" type="submit">
                                       <span class="glyphicon glyphicon-trash"></span>
                                </button>
                              </form>
                      		</td>
                      	</tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@stop
