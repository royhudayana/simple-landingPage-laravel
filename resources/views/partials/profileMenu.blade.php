<div class="menu-wrap">
    <nav class="profile-menu">
        <div class="profile"><img src="{{asset('admin/assets/images/profile-menu-image.png')}}" width="60" alt="{{ Auth::user()->name }}"/><span>{{ Auth::user()->name }}</span></div>
        <div class="profile-menu-list">
            <a href="#"><i class="fa fa-star"></i><span>Favorites</span></a>
            <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
            <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
            <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
        </div>
    </nav>
    <button class="close-button" id="close-button">Close Menu</button>
</div>