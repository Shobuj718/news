<div class="vertical-nav">
            <button class="collapse-menu"><i class="icon-menu2"></i></button>
            <div class="user-details clearfix">
                <a href="{{ route('home') }}" class="user-img"><img src="{{asset(Auth::user()->photo)}}" alt="User Info"> <span class="likes-info">9</span></a>
                <h5 class="user-name">{{Auth::user()->name}}</h5>
            </div>
            <ul class="menu clearfix">
                <li class="@yield('dashboard')"><a href="#"><i class="icon-air-play"></i> <span class="menu-item">Dashboard</span></a></li>
                <li class="@yield('posts')">
                    <a href="#"><i class="icon-lab3"></i> <span class="menu-item">Posts</span> <span class="down-arrow"></span></a>
                    <ul>
                        <li><a href="javascript:void(0)">Tasks</a></li>
                    </ul>
                </li>
                <li class="@yield('category')">
                    <a href="#"><i class="icon-lab3"></i> <span class="menu-item">ক্যাটাগরি</span> <span class="down-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('category.create') }}">ক্যাটাগরি যুক্ত করুন</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>