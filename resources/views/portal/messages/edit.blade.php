@extends('layouts.portal')

@section('css')
    <link href="{{asset('admin/assets/plugins/slidepushmenus/css/component.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/datatables/css/jquery.datatables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/datatables/css/jquery.datatables_themeroller.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
<div id="main-wrapper" class="container">
    <div class="row">
        <div class="col-xs-4">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h4 class="panel-title">New Message</h4>
                </div>
                <div class="panel-body">
                    {!! Form::model($message, ['action' => ['smsMessageController@update', $message->id], 'method' => 'patch']) !!}
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-group">
                                    {{ Form::text('title', null, ['required'=> 'required', 'class' => 'form-control', 'placeholder'=>'Title']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('message', null, ['required'=> 'required', 'class' => 'form-control', 'placeholder'=>'Message']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::select('group_id', ['' => '--Select Group --'] + $group , null, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::select('type', array('direct' => 'Direct', 'schedule' => 'Schedule'), null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" id="add-row" class="btn btn-success btn-block">Update</button>
                                <button type="cancel"  class="btn btn-primary btn-block">Cancel</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-xs-8">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h4 class="panel-title">Messages</h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Message</th>
                                <th>Group</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($messages))
                                @foreach($messages as $message)
                                    <tr>
                                        <th>{{$message->title}}</th>
                                        <th>{{$message->message}}</th>
                                        <th>{{$message->group->name}}</th>
                                        <th>{{$message->type}}</th>
                                        <th>
                                            <div class="row">
                                                {!! Form::open(['method'=>'DELETE', 'route'=>['message.destroy',$message->id]]) !!}
                                                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ action('smsMessageController@edit',$message->id) }}" class="btn btn-primary"><i class="menu-icon fa fa-pencil "></i></a>
                                                <button data-toggle="tooltip" data-placement="top" title="Delete" type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this group?');"><i class="menu-icon fa fa-trash "></i></button>
                                                {!! Form::close() !!}

                                            </div>
                                        </th>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Message</th>
                                <th>Group</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Row -->
@endsection

@section('scripts')
        <script src="{{asset('admin/assets/plugins/jquery-mockjax-master/jquery.mockjax.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/js/jquery.datatables.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('admin/assets/js/pages/table-data.js')}}"></script>
@endsection
