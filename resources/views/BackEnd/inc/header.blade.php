<header>
            <a href="{{route('home')}}" class="logo"><img src="{{asset('public/BackEnd/img/ehsan_soft_logo.PNG')}}" alt="Arise Admin Dashboard Logo"></a>
            <ul id="header-actions" class="clearfix">
                <li class="list-box hidden-xs dropdown">
                    <a id="drop2" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-warning2"></i> </a><span class="info-label blue-bg">5</span>
                    <ul class="dropdown-menu imp-notify">
                        <li class="dropdown-header">You have 3 notifications</li>
                        <li>
                            <div class="icon"><img src="{{asset('public/BackEnd')}}/img/thumbs/user10.png" alt="Arise Admin"></div>
                            <div class="details"><strong class="text-danger">Michael Phelps</strong> <span>Firefox is a free, open-source web browser from Mozilla.</span></div>
                        </li>
                        <li class="dropdown-footer">See all the notifications</li>
                    </ul>
                </li>
                <li class="list-box hidden-xs dropdown">
                    <a id="drop3" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-archive2"></i> </a><span class="info-label red-bg">3</span>
                    <ul class="dropdown-menu progress-info">
                        <li class="dropdown-header">You have 7 pending tasks</li>
                        <li>
                            <div class="progress-info"><strong class="text-danger">Critical</strong> <span>New Dashboard Design</span> <span class="pull-right text-danger">20%</span></div>
                            <div class="progress progress-md no-margin">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><span class="sr-only">20% Complete (success)</span></div>
                            </div>
                        </li>
                        
                        <li class="dropdown-footer">See all the tasks</li>
                    </ul>
                </li>
                <li class="list-box user-admin hidden-xs dropdown">
                    <div class="admin-details">
                        <div class="name">{{Auth::user()->name}}</div>
                        <div class="designation">{{Auth::user()->role->role}}</div>
                    </div>
                    <a id="drop4" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i></a>
                    <ul class="dropdown-menu sm">
                        <li class="dropdown-content">
                            <a href="">Edit Profile</a> 
                            <a href="">Change Password</a>
                            <a href="">Settings</a> 
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                         </li>
                    </ul>
                </li>
                <li><button type="button" id="toggleMenu" class="toggle-menu"><i class="collapse-menu-icon"></i></button></li>
            </ul>
            <div class="custom-search hidden-sm hidden-xs"><input type="text" class="search-query" placeholder="Search here ..."> <i class="icon-search3"></i></div>
        </header>