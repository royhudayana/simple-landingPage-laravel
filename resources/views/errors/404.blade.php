@extends('layouts.error')

@section('content')
    <main class="page-content">
        <div class="page-inner">
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-4 center">
                        <h1 class="text-xxl text-primary text-center">404</h1>
                        <div class="details">
                            <h3>Oops ! Something went wrong</h3>
                            <p>We can't find the page you're looking for. Return <a href="{{ url('/') }}">Home</a> or search.</p>
                        </div>
                        <form class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                    <button class="btn btn-default"><i class="fa fa-search"></i></button>
                                </span>
                        </form>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
        </div><!-- Page Inner -->
    </main>
@endsection
