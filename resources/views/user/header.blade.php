<header class="header_area">
    <!-- logo -->
    <div class="sidebar_logo">
        <a href="{{ route('user.dashboard') }}">
            <img src="" alt="" class="img-fluid logo2">
            <img src="" alt="" class="img-fluid logo1"> 
        </a>
    </div>
    <div class="sidebar_btn">
        <button class="sidbar-toggler-btn"><i class="fas fa-bars"></i></button>
    </div>
    <ul class="header_menu">
        {{-- <li><a href="#" class="search_btn" data-toggle="modal" data-target="#myModal"><i
                    class="fas fa-search"></i></a>
            <div class="modal fade search_box" id="myModal">
                <button type="button" class="close m-2 text-white float-right" data-dismiss="modal">&times;</button>
                <form action="#" class="modal-dialog modal-lg">

                    <div class="modal-content bg-transparent">
                        <!-- Modal body -->
                        <div class="modal-body">
                            <input class="form-control bg-transparent text-white form-control-lg" type="text"
                                placeholder="Search...">
                            <button class="btn btn-lg submit-btn" type="submit">Search</button>
                        </div>
                    </div>

                </form>
            </div>
        </li> --}}
        
        <li><a data-toggle="dropdown" href="#"><i class="far fa-user"></i></a>
            <div class="user_item dropdown-menu dropdown-menu-right">
                <div class="admin">
                    <a href="{{ route('user.profile.edit') }}" class="user_link"><img
                            src="{{ !empty($user->profile_photo_path) ? url('upload/UserImages/' . $user->profile_photo_path) : url('upload/no_image.jpg') }}"
                            alt=""></a>
                </div>
                <ul>

                    <li><a href="{{ route('user.profile.edit') }}"><span><i class="fas fa-user"></i></span> Edit
                            Profile</a></li>
                    <li><a href="{{ route('user.password.view') }}"><span><i class="fas fa-cogs"></i></span>
                            Password Change</a></li>
                    <li>

                        <a href="{{ route('user.logout') }}"><span><i class="fas fa-unlock-alt"></i></span> Logout</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>

            <a class="responsive_menu_toggle" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
</header>
