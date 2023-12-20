<!-- start Side Bar to Manage Shop Activities -->
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="treeview {{request()->is('admin') ? 'active' : ''}}">
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>{{__('Dashboard')}}</span>
                </a>
            </li>
            <li class="treeview {{request()->is('admin/settings') ? 'active' : ''}}">
                <a href="{{route('admin.settings')}}">
                    <i class="fa fa-sliders"></i> <span>{{__('Website Settings')}}</span>
                </a>
            </li>
            <li class="treeview {{ request()->is('admin/shop/*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-cogs"></i>
                    <span>{{__('Shop Settings')}}</span>
                    <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
                 </span>
                </a>
                <ul class="treeview-menu ">
                    <li><a href="{{route('admin.size')}}"><i class="fa fa-circle-o"></i> {{__('Size')}}</a></li>
                    <li><a href="{{route('admin.color')}}"><i class="fa fa-circle-o"></i> {{__('Color')}}</a></li>
                    <li><a href="{{route('admin.country')}}"><i class="fa fa-circle-o"></i> {{__('Country')}}</a></li>
                    <li><a href="{{route('admin.shipping')}}"><i class="fa fa-circle-o"></i> {{__('Shipping Cost')}}</a></li>
                    <li><a href="{{route('admin.toplevel')}}"><i class="fa fa-circle-o"></i> {{__('Top Level Category')}}</a></li>
                    <li><a href="{{route('admin.midlevel')}}"><i class="fa fa-circle-o"></i> {{__('Mid Level Category')}}</a></li>
                    <li><a href="{{route('admin.endlevel')}}"><i class="fa fa-circle-o"></i> {{__('End Level Category')}}</a></li>
                </ul>
            </li>
            <li class="treeview {{request()->is('admin/product') ? 'active' : ''}}">
                <a href="{{route('admin.product')}}">
                    <i class="fa fa-shopping-bag"></i> <span>{{__('Product Management')}}</span>
                </a>
            </li>
            <li class="treeview {{request()->is('admin/ordermanagement') ? 'active' : ''}}">
                <a href="{{route('admin.order')}}">
                    <i class="fa fa-sticky-note"></i> <span>{{__('Order Management')}}</span>
                </a>
            </li>
            <li class="treeview {{ (request()->is('admin/slider') || request()->is('admin/add-slider') || request()->is('admin/edit-slider')) ? 'active' : ''}}">
                <a href="{{route('admin.slider')}}">
                    <i class="fa fa-picture-o"></i> <span>Manage Sliders</span>
                </a>
            </li>
            <!-- Icons to be displayed on Shop -->
            <li class="treeview {{ (request()->is('admin/service') || request()->is('admin/add-service') || request()->is('admin/edit-service')) ? 'active' : ''}}">
                <a href="{{route('admin.service')}}">
                    <i class="fa fa-list-ol"></i> <span>Services</span>
                </a>
            </li>
            <li class="treeview {{ (request()->is('admin/faq') || request()->is('admin/add-faq') || request()->is('admin/edit-faq')) ? 'active' : ''}}">
                <a href="{{route('admin.faq')}}">
                    <i class="fa fa-question-circle"></i> <span>FAQ</span>
                </a>
            </li>
            <li class="treeview {{ request()->is('admin/customer') ? 'active' : ''}}">
                <a href="{{route('admin.customer')}}">
                    <i class="fa fa-user-plus"></i> <span>Registered Customer</span>
                </a>
            </li>
            <li class="treeview {{ request()->is('admin/page') ? 'active' : ''}}">
                <a href="{{route('admin.page')}}">
                    <i class="fa fa-tasks"></i> <span>Page Settings</span>
                </a>
            </li>
            <li class="treeview {{ request()->is('admin/social') ? 'active' : ''}}">
                <a href="{{route('admin.social')}}">
                    <i class="fa fa-globe"></i> <span>Social Media</span>
                </a>
            </li>
            <li class="treeview {{ request()->is('admin/subscriber') ? 'active' : ''}}">
                <a href="{{route('admin.subscriber')}}">
                    <i class="fa fa-hand-o-right"></i> <span>Subscriber</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
<!-- end  Side Bar to Manage Shop Activities -->
