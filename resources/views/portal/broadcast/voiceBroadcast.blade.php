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
                    <!-- Row -->     
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Voice Broadcast</h4>
                                </div>
                                <div class="panel-body">
                                    <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add New Broadcast</button>
                                    <!-- Modal -->
                                                    <form id="add-row-form" action="javascript:void(0);">
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                                </div>
                                                <div class="modal-body">
                                                        <div class="form-group">
                                                            <input type="text" id="name-input" class="form-control" placeholder="Name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" id="position-input" class="form-control" placeholder="Position" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="number" id="age-input" class="form-control" placeholder="Age" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" id="date-input" class="form-control date-picker" placeholder="Start Date" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="number" id="salary-input" class="form-control" placeholder="Salary" required>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" id="add-row" class="btn btn-success">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                    </form>
                                    <div class="table-responsive">
                                        <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
                                                <tr>
                                                    <th>Group Name</th>
                                                    <th>Message Type</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Group Name</th>
                                                    <th>Message Type</th>
                                                    <th>Actions</th>
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

@section('script')
        <script src="{{asset('assets/plugins/jquery-mockjax-master/jquery.mockjax.js')}}"></script>
        <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/js/jquery.datatables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('assets/js/pages/table-data.js')}}"></script>
@endsection
