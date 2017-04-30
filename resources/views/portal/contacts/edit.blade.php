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
      <div class="col-md-12">
           <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel info-box panel-white">
                        <div class="panel-body">
                            <div class="info-box-stats">
                                <p class="counter">0712XXXXXX</p>
                                <span class="info-box-title">Subscribers</span>
                            </div>
                            <div class="info-box-icon">
                                <i class="icon-users"></i>
                            </div>
                            <div class="info-box-progress">
                                <div class="progress progress-xs progress-squared bs-n">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel info-box panel-white">
                        <div class="panel-body">
                            <div class="info-box-stats">
                                <p class="counter">340,230</p>
                                <span class="info-box-title">Imports</span>
                            </div>
                            <div class="info-box-icon">
                                <i class="icon-eye"></i>
                            </div>
                            <div class="info-box-progress">
                                <div class="progress progress-xs progress-squared bs-n">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel info-box panel-white">
                        <div class="panel-body">
                            <div class="info-box-stats">
                                <p>$<span class="counter">653,000</span></p>
                                <span class="info-box-title">Groups</span>
                            </div>
                            <div class="info-box-icon">
                                <i class="icon-basket"></i>
                            </div>
                            <div class="info-box-progress">
                                <div class="progress progress-xs progress-squared bs-n">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel info-box panel-white">
                        <div class="panel-body">
                            <div class="info-box-stats">
                                <p class="counter">47,500</p>
                                <span class="info-box-title">Capacity</span>
                            </div>
                            <div class="info-box-icon">
                                <i class="icon-envelope"></i>
                            </div>
                            <div class="info-box-progress">
                                <div class="progress progress-xs progress-squared bs-n">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Row -->
         <div class="row">
             <div class="col-xs-4">
                 <div class="panel panel-white">
                     <div class="panel-heading">
                         <h4 class="panel-title">Edit Contact</h4>
                     </div>
                     <div class="panel-body">
                         {!! Form::model($contact, ['action' => ['smsContactController@update', $contact->id], 'method' => 'patch']) !!}
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <div class="form-group">
                                         {{ Form::text('name', null, ['required'=> 'required', 'class' => 'form-control', 'placeholder'=>'Name']) }}
                                     </div>
                                     <div class="form-group">
                                         {{ Form::text('number', null, ['required'=> 'required', 'class' => 'form-control', 'placeholder'=>'Number']) }}
                                     </div>
                                     <div class="form-group">
                                         {{ Form::select('group_id', ['' => '--Select Group --'] + $group , null, ['class' => 'form-control']) }}
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
                         <h4 class="panel-title">Contacts</h4>
                     </div>
                     <div class="panel-body">
                         <div class="table-responsive">
                             <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                 <thead>
                                 <tr>
                                     <th>Name</th>
                                     <th>Number</th>
                                     <th>Group</th>
                                     <th>Source</th>
                                     <th>Action</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 @if(isset($contacts))
                                     @foreach($contacts as $contact)
                                         <tr>
                                             <th>{{$contact->name}}</th>
                                             <th>{{$contact->number}}</th>
                                             <th>{{$contact->group->name}}</th>
                                             <th>{{$contact->source}}</th>
                                             <th>
                                                 <div class="row">
                                                     {!! Form::open(['method'=>'DELETE', 'route'=>['contact.destroy',$contact->id]]) !!}
                                                     <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ action('smsContactController@edit',$contact->id) }}" class="btn btn-primary"><i class="menu-icon fa fa-pencil "></i></a>
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
                                     <th>Name</th>
                                     <th>Number</th>
                                     <th>Group</th>
                                     <th>Source</th>
                                     <th>Action</th>
                                 </tr>
                                 </tfoot>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>
    </div><!-- Row -->
</div>
@endsection

@section('script')
        <script src="{{asset('admin/assets/plugins/jquery-mockjax-master/jquery.mockjax.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/js/jquery.datatables.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('admin/assets/js/pages/table-data.js')}}"></script>
@endsection
