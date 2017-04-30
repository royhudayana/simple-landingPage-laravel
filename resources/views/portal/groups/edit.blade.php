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
                    <h4 class="panel-title">Edit Group</h4>
                </div>
                <div class="panel-body">
                    {!! Form::model($group, ['action' => ['smsGroupController@update', $group->id], 'method' => 'patch']) !!}
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-group">
                                    {{ Form::text('name', null, ['required'=> 'required', 'class' => 'form-control', 'placeholder'=>'Name']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('description', null, ['required'=> 'required', 'class' => 'form-control', 'placeholder'=>'Description' ]) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('keyword', null, ['required'=> 'required', 'class' => 'form-control', 'placeholder'=>'keyword']) }}
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" id="add-row" class="btn btn-success btn-block">Add</button>
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
                    <h4 class="panel-title">Groups</h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead>
                            <tr>
                                <th>Group Name</th>
                                <th>Group Type</th>
                                <th>Keyword</th>
                                {{--<th>Type</th>--}}
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($groups))
                                @foreach($groups as $group)
                                    <tr>
                                        <th>{{$group->name}}</th>
                                        <th>{{$group->description}}</th>
                                        <th>{{$group->keyword}}</th>
                                        <th>
                                            <div class="row">
                                                {!! Form::open(['method'=>'DELETE', 'route'=>['group.destroy',$group->id]]) !!}
                                                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ action('smsGroupController@edit',$group->id) }}" class="btn btn-primary"><i class="menu-icon fa fa-pencil "></i></a>
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
                                <th>Group Name</th>
                                <th>Group Type</th>
                                <th>Keyword</th>
                                {{--<th>Type</th>--}}
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
