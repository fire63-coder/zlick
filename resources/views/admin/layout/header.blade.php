<!-- start header  -->
<header class="main-header">
    <a href="index.php" class="logo">
        <span class="logo-lg">{{__('ZLICK')}}</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{__('Toggle navigation')}}</span>
        </a>
        <span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">{{__('Admin Panel')}}</span>
        <!-- Top Bar ... User Inforamtion .. Login/Log out Area -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('backend/uploads/user-1.png')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{__('Administrator')}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div>
                                <a href="{{route('admin.edit_profile')}}" class="btn btn-default btn-flat">{{__('Edit Profile')}}</a>
                            </div>
                            <div>
                                <a href="{{route('customer.logout')}}" class="btn btn-default btn-flat">{{__('Log out')}}</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- end header  -->