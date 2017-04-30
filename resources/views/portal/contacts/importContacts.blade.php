@extends('layouts.app-org')

@section('css')
    <link href="assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
<div id="main-wrapper" class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h3 class="panel-title">Plupload</h3>
                </div>
                <div class="panel-body">
                    <div id="uploader">
                        <p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h3 class="panel-title">Instructions</h3>
                </div>
                <div class="panel-body">
                    Please upload CSV file only - names in 1st column, phone # in 2nd NO spaces, dashes, or parentheses in phone numbers 
                    Include country code in the number 
                    US Example: 12025248725
                    UK Example: 447481340516
                </div>
            </div>
        </div>
    </div><!-- Row -->
</div>
@endsection

@section('script')
         <script src="assets/plugins/dropzone/dropzone.min.js"></script>
        <script src="assets/plugins/plupload/js/plupload.full.min.js"></script>
        <script src="assets/plugins/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js"></script>
        <script src="assets/js/pages/form-plupload.js"></script>
@endsection
