<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">
                <a href="javascript:void(0);" {{--id="profile-menu-link"--}}>
                    <div class="sidebar-profile-image">
                        <img src="{{asset('admin/assets/images/profile-menu-image.png')}}" class="img-circle img-responsive" alt="">
                    </div>
                    <div class="sidebar-profile-details">
                        <span>{{ Auth::user()->name }}<br><small>{{ Auth::user()->roles->name }}</small></span>
                    </div>
                </a>
            </div>
        </div>
        <ul class="menu accordion-menu">
            <li><a href="#" class="waves-effect waves-button"><i class="menu-icon fa fa-home fa-2x"></i><p>Dashboard</p></a></li>
            <li><a href="{{route('contact.index')}}" class="waves-effect waves-button"><i class="menu-icon fa fa-book fa-2x"></i><p>Contacts</p></a></li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="menu-icon fa fa-users fa-2x"></i><p>Groups</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{route('group.index')}}">groups</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-envelope"></span><p>Messages</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{route('message.index')}}">Messages</a></li>
                </ul>
            </li>

            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Reports</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="#">Sent Messages</a></li>
                    <li><a href="#">Message Logs</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- Page Sidebar Inner -->
</div>