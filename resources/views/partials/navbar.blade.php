<div class="navbar">
    <div class="navbar-inner">
        <div class="sidebar-pusher">
            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="logo-box">
            <a href="{{url('/home')}}" class="logo-text"><span>{{ config('app.name') }}</span></a>
        </div><!-- Logo Box -->
        <div class="search-button">
            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
        </div>
        <div class="topmenu-outer">
            <div class="top-menu">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                    </li>
                    {{--
                     <li>
                         <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-diamond"></i></a>
                     </li>
                     --}}
                     <li>
                         <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                     </li>
                 </ul>
                 <ul class="nav navbar-nav navbar-right">
                     {{--
                     <li>
                         <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                     </li>
                     --}}
                 {{--
                     <li class="dropdown">
                         <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right">4</span></a>
                         <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                             <li><p class="drop-title">You have 4 new  messages !</p></li>
                             <li class="dropdown-menu-list slimscroll messages">
                                 <ul class="list-unstyled">
                                     <li>
                                         <a href="#">
                                             <div class="msg-img"><div class="online on"></div><img class="img-circle" src="{{asset('admin/assets/images/avatar2.png')}}" alt=""></div>
                                             <p class="msg-name">Sandra Smith</p>
                                             <p class="msg-text">Hey ! I'm working on your project</p>
                                             <p class="msg-time">3 minutes ago</p>
                                         </a>
                                     </li>
                                 </ul>
                             </li>
                             <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                         </ul>
                     </li>
                     <li class="dropdown">
                         <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-success pull-right">3</span></a>
                         <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                             <li><p class="drop-title">You have 3 pending tasks !</p></li>
                             <li class="dropdown-menu-list slimscroll tasks">
                                 <ul class="list-unstyled">
                                     <li>
                                         <a href="#">
                                             <div class="task-icon badge badge-success"><i class="icon-user"></i></div>
                                             <span class="badge badge-roundless badge-default pull-right">1min ago</span>
                                             <p class="task-details">New user registered.</p>
                                         </a>
                                     </li>
                                 </ul>
                             </li>
                             <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                         </ul>
                     </li>
                  --}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                            <span class="user-name">{{Auth::user()->name}}<i class="fa fa-angle-down"></i></span>
                            <img class="img-circle avatar" src="{{asset('admin/assets/images/avatar1.png')}}" width="40" height="40" alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-list" role="menu">
                            {{--
                            <li role="presentation"><a href="#"><i class="fa fa-user"></i>Profile</a></li>
                            <li role="presentation"><a href="#"><i class="fa fa-calendar"></i>Calendar</a></li>
                            <li role="presentation"><a href="#"><i class="fa fa-envelope"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
                            <li role="presentation"><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a href="#"><i class="fa fa-lock"></i>Lock screen</a></li>
                            --}}
                            <li role="presentation">
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out m-r-xs"></i>Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                           class="log-out waves-effect waves-button waves-classic">
                            <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                        </a>
                    </li>
                     {{--
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic" id="showRight">
                            <i class="fa fa-comments"></i>
                        </a>
                    </li>
                    --}}
                </ul><!-- Nav -->
            </div><!-- Top Menu -->
        </div>
    </div>
</div><!-- Navbar -->