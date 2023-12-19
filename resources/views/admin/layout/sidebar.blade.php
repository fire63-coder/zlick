<!-- start Side Bar to Manage Shop Activities -->
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="treeview active">
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>{{__('Dashboard')}}</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="{{route('admin.settings')}}">
                    <i class="fa fa-sliders"></i> <span>{{__('Website Settings')}}</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-cogs"></i>
                    <span>{{__('Shop Settings')}}</span>
                    <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
                 </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.size')}}"><i class="fa fa-circle-o"></i> {{__('Size')}}</a></li>
                    <li><a href="{{route('admin.color')}}"><i class="fa fa-circle-o"></i> {{__('Color')}}</a></li>
                    <li><a href="{{route('admin.country')}}"><i class="fa fa-circle-o"></i> {{__('Country')}}</a></li>
                    <li><a href="{{route('admin.shipping')}}"><i class="fa fa-circle-o"></i> {{__('Shipping Cost')}}</a></li>
                    <li><a href="{{route('admin.toplevel')}}"><i class="fa fa-circle-o"></i> {{__('Top Level Category')}}</a></li>
                    <li><a href="{{route('admin.midlevel')}}"><i class="fa fa-circle-o"></i> {{__('Mid Level Category')}}</a></li>
                    <li><a href="{{route('admin.endlevel')}}"><i class="fa fa-circle-o"></i> {{__('End Level Category')}}</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="{{route('admin.productmanagement')}}">
                    <i class="fa fa-shopping-bag"></i> <span>{{__('Product Management')}}</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="{{route('admin.order')}}">
                    <i class="fa fa-sticky-note"></i> <span>{{__('Order Management')}}</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="slider.php">
                    <i class="fa fa-picture-o"></i> <span>Manage Sliders</span>
                </a>
            </li>
            <!-- Icons to be displayed on Shop -->
            <li class="treeview ">
                <a href="service.php">
                    <i class="fa fa-list-ol"></i> <span>Services</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="faq.php">
                    <i class="fa fa-question-circle"></i> <span>FAQ</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="customer.php">
                    <i class="fa fa-user-plus"></i> <span>Registered Customer</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="page.php">
                    <i class="fa fa-tasks"></i> <span>Page Settings</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="social-media.php">
                    <i class="fa fa-globe"></i> <span>Social Media</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="subscriber.php">
                    <i class="fa fa-hand-o-right"></i> <span>Subscriber</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
<!-- end  Side Bar to Manage Shop Activities -->