@extends('layouts.admin.app')
@section('content')
  @include('layouts.modal')
        <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Logs <small>List of Logs</small></h2>

                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="table-responsive">
                        <table class="table" id="productsample" >
                            <thead>
                                <th class="col-md-2">Date</th>
                                <th class="col-md-2">Name</th>
                            </thead>
                        <tbody>
                        @foreach ($logs as $log)
                        <tr>
                            <td>{{ date('M d, Y', strtotime($log->created_at)) }}</td>
                            <td>{{ $log->name }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection