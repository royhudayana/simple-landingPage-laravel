@extends('layouts.app-org')

@section('css')
      <link href="{{asset('assets/plugins/slidepushmenus/css/component.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/plugins/datatables/css/jquery.datatables.min.css')}}" rel="stylesheet" type="text/css"/> 
        <link href="{{asset('assets/plugins/datatables/css/jquery.datatables_themeroller.css')}}" rel="stylesheet" type="text/css"/> 
        <link href="{{asset('assets/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
                <div id="main-wrapper" class="container">
    
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">SMS Logs</h4>
                                </div>
                                <div class="panel-body">
                                    <button type="button" class="btn btn-success m-b-sm">Export</button>
                                    <button type="button" class="btn btn-warning m-b-sm">Delete</button>
                                    <div class="table-responsive">
                                        <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
                                                <tr>
                                                    <th>Group Name</th>
                                                    <th>Message</th>
                                                    <th>In/Out</th>
                                                    <th>Phone Number</th>
                                                    <th>Created</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Group Name</th>
                                                    <th>Message</th>
                                                    <th>In/Out</th>
                                                    <th>Phone Number</th>
                                                    <th>Created</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div>
@endsection

@section('scripts')
        <script src="{{asset('assets/plugins/jquery-mockjax-master/jquery.mockjax.js')}}"></script>
        <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/js/jquery.datatables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('assets/js/pages/table-data.js')}}"></script>
@endsection
