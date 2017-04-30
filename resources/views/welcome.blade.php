@extends('layouts.front')

@section('content')

<nav id="header" class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">{{ config('app.name') }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="#home">Home</a></li>

                <li><a href="#features">Features</a></li>
                {{--
                <li><a href="#pricing">Pricing</a></li>
                --}}
                <li><a href="#contact">Contact</a></li>
                @if (Route::has('login'))
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="home" id="home">
    <div class="overlay"></div>
    {{-- <div class="container"> --}}
        <div class="row">
            <div class="home-text col-md-8">
                <h1 class="wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="1.5s" data-wow-offset="10"><br>Biopharmaca Jamu-Journal</h1>
                <p class="lead wow fadeInDown" data-wow-delay="2s" data-wow-duration="1.5s" data-wow-offset="10">Web-based electronic journal on herbal medicine.</p>
            {{--    <a href="http://themeforest.net/item/modern-responsive-admin-dashboard-template/11004840" target="_blank" class="btn btn-default btn-rounded btn-lg wow fadeInUp" data-wow-delay="2.5s" data-wow-duration="1.5s" data-wow-offset="10">Download</a>--}}
                <a href="{{ url('/login') }}"  class="btn btn-success btn-rounded btn-lg wow fadeInUp" data-wow-delay="2.5s" data-wow-duration="1.5s" data-wow-offset="10">Log In</a>
            </div>
            {{-- <div class="scroller">
                <div class="mouse"><div class="wheel"></div></div>
            </div> --}}
        </div>
    </div>
</div>
<div class="container" id="features">
    <div class="row features-list">
        <div class="col-sm-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-offset="10" data-wow-delay="0.5s">
            <div class="feature-icon">
                <i class="fa fa-laptop"></i>
            </div>
            <h2>Rapidity</h2>
            <p>.</p>
            {{--   <p><a class="btn btn-link" href="#" role="button">View details &raquo;</a></p> --}}
          </div>
          <div class="col-sm-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-offset="10" data-wow-delay="0.7s">
              <div class="feature-icon">
                  <i class="fa fa-lightbulb-o"></i>
              </div>
              <h2>Low Cost and High ROI</h2>
              <p>. </p>
              {{-- <p><a class="btn btn-link" href="#" role="button">View details &raquo;</a></p> --}}
         </div>
         <div class="col-sm-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-offset="10" data-wow-delay="0.9s">
             <div class="feature-icon">
                 <i class="fa fa-support"></i>
             </div>
             <h2>Save Money</h2>
             <p>.</p>
          {{--  <p><a class="btn btn-link" href="#" role="button">View details &raquo;</a></p> --}}
        </div>
    </div>
</div>

<section id="section-3">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="10">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <p class="text-white">“SavannaSms brings to you t in a something that is highly complex”</p>
                                    <span>- Melvin, App Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <p class="text-white">“We are bringing into the market a product that is robust and easy to use”</p>
                                    <span>- Marie, Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <p>“SavannaSms will revolutionize the way business handle their communication”</p>
                                    <span>- Jenna, UI Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 wow rotateInUpLeft" data-wow-duration="1.5s" data-wow-offset="10" data-wow-delay="0.5s">
                <a href="#contact" class="btn btn-success btn-lg btn-rounded contact-button"><i class="fa fa-envelope-o"></i></a>
                <h2>Let's keep in touch</h2>
                {!! Form::open(['action' => 'FrontendContactController@store', 'method' => 'post' ,'class'=> 'm-t-md' ]) !!}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                {{ Form::text('name', null, ['required'=> 'required', 'class' => 'form-control input-lg contact-name', 'placeholder'=>'Name']) }}
                            </div>
                            <div class="col-sm-6">
                                {{ Form::email('email', null, ['required'=> 'required', 'class' => 'form-control input-lg', 'placeholder'=>'Email']) }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::text('subject', null, ['required'=> 'required', 'class' => 'form-control input-lg', 'placeholder'=>'Subject']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::textarea('message', null, ['required'=> 'required', 'class' => 'form-control','rows'=>'4=6', 'placeholder'=>'Message']) }}

                    </div>
                    <button type="submit" class="btn btn-default btn-lg">Send Message</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <p class="text-center no-s">{{date('Y')}} &copy; {{ config('app.name') }} by {{ config('app.company') }}.</p>
    </div>
</footer>

<script>
    @if(session()->has('message'))
    var type = '{{ session()->get('type') }}';
    switch(type){
        case 'info':
            toastr.info("{{ session()->get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ session()->get('message') }}");
            break;

        case 'success':
            toastr.success("{{ session()->get('message') }}");
            break;

        case 'error':
            toastr.error("{{ session()->get('message') }}");
            break;
    }
    @endif
</script>
@endsection
