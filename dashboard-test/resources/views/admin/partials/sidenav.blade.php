<div class="sidebar">
    <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
    <div class="sidebar__inner">
       
        <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
            <ul class="sidebar__menu">
                <li class="sidebar-menu-item {{menuActive('admin.dashboard')}}">
                    <a href="{{route('admin.dashboard')}}" class="nav-link ">
                        <i class="menu-icon las la-chart-line"></i>
                        <span class="menu-title">@lang('Dashboard')</span>
                    </a>
                </li>
                <li class="sidebar__menu-header">@lang('Users Management')</li>
                <li class="sidebar-menu-item {{menuActive('admin.users.*')}}">
                    <a href="{{route('admin.users.active')}}" class="nav-link ">
                        <i class="menu-icon las la-user"></i>
                        <span class="menu-title">@lang('All Users')</span>
                    </a>
                </li>
                <li class="sidebar-menu-item  {{menuActive('admin.subscriber.*')}}">
                    <a href="" class="nav-link"
                        data-default-url="">
                        <i class="menu-icon las la-envelope"></i>
                        <span class="menu-title">@lang('Subscribers') </span>
                    </a>
                </li>

                <li class="sidebar__menu-header">@lang('Shop Management')</li>
                <li class="sidebar-menu-item {{menuActive('admin.category*')}}">
                    <a href="{{route('admin.category.index')}}" class="nav-link ">
                        <i class="las la-align-left menu-icon"></i>
                        <span class="menu-title">@lang('Categories')</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{menuActive('admin.shipping*')}}">
                    <a href="" class="nav-link ">
                        <i class=" las la-truck menu-icon"></i>
                        <span class="menu-title">@lang('Shipping')</span>
                    </a>
                </li>

                <li class="sidebar__menu-header">@lang('Products')</li>
                <li class="sidebar-menu-item {{menuActive('admin.product*')}}">
                    <a href="{{route('admin.product.index')}}" class="nav-link ">
                        <i class="la la-product-hunt menu-icon"></i>
                        <span class="menu-title">@lang('All Products')</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{menuActive('admin.orders.index')}}">
                    <a href="{{route('admin.orders.index')}}" class="nav-link ">
                        <i class="la la-cart-plus menu-icon"></i>
                        <span class="menu-title">@lang('All Orders')</span>
                    </a>
                </li>
                <li class="sidebar__menu-header">@lang('Subscription')</li>
                <li class="sidebar-menu-item {{menuActive(['admin.packages.index'])}}">
                    <a href="" class="nav-link">
                        <i class="menu-icon las la-credit-card"></i>
                        <span class="menu-title">@lang('Packages')</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{menuActive(['admin.subscriptions.index'])}}">
                    <a href="" class="nav-link">
                        <i class="menu-icon fas fa-gift"></i>
                        <span class="menu-title">@lang('Subscriptions')</span>
                    </a>
                </li>
                <li class="sidebar__menu-header">@lang('Bookings')</li>
                <li class="sidebar-menu-item {{menuActive(['admin.consultations.index'])}}">
                    <a href="" class="nav-link">
                        <i class="menu-icon fas fa-user-md"></i>
                        <span class="menu-title">@lang('Consultations')</span>
                    </a>
                </li>

                <li class="sidebar__menu-header">@lang('Transactions')</li>
                <li class="sidebar-menu-item {{menuActive('admin.deposit.*')}}">
                    <a href="{{route('admin.deposit.pending')}}" class="nav-link ">
                        <i class="menu-icon las la-wallet"></i>
                        <span class="menu-title">@lang('Deposits')</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{menuActive('admin.gateway.*')}}">
                    <a href="" class="nav-link ">
                        <i class="menu-icon las la-dollar-sign"></i>
                        <span class="menu-title">@lang('Payment Gateways')</span>
                    </a>
                </li>

    <li class="sidebar__menu-header">@lang('Report')</li>
    <li class="sidebar-menu-item {{menuActive(['admin.report.transaction','admin.report.transaction.search'])}}">
        <a href="" class="nav-link">
            <i class="menu-icon las la-credit-card"></i>
            <span class="menu-title">@lang('Transactions')</span>
        </a>
    </li>
    <li class="sidebar-menu-item {{menuActive(['admin.report.login.history','admin.report.login.ipHistory'])}}">
        <a href="" class="nav-link">
            <i class="menu-icon las la-sign-in-alt"></i>
            <span class="menu-title">@lang('Login Activities')</span>
        </a>
    </li>
    <li class="sidebar-menu-item {{menuActive('admin.report.notification.history')}}">
        <a href="" class="nav-link">
            <i class="menu-icon las la-bell"></i>
            <span class="menu-title">@lang('Notifications')</span>
        </a>
    </li>
    <li class="sidebar__menu-header">@lang('Help Desk')</li>
    <li class="sidebar-menu-item {{menuActive('admin.ticket.*')}}">
        <a href="" class="nav-link ">
            <i class="menu-icon las la la-life-ring"></i>
            <span class="menu-title">@lang('Support Ticket')</span>
           
</a>
</li>
<li class="sidebar__menu-header">@lang('Content Management')</li>

<li class="sidebar-menu-item {{menuActive('admin.frontend.manage.*')}}">
    <a href="" class="nav-link ">
        <i class="menu-icon la la-pager"></i>
        <span class="menu-title">@lang('Pages')</span>
    </a>
</li>

<li class="sidebar-menu-item sidebar-dropdown">
    <a href="javascript:void(0)" class="{{menuActive('admin.frontend.sections*',3)}}">
        <i class="menu-icon la la-grip-horizontal"></i>
        <span class="menu-title">@lang('Sections')</span>
    </a>
    <div class="sidebar-submenu {{menuActive('admin.frontend.sections*',2)}} ">
        <ul>
            @php
            $lastSegment = collect(request()->segments())->last();
            @endphp
        </ul>
    </div>
</li>

</ul>
</div>
</div>
</div>
<!-- sidebar end -->

@push('script')
<script>
    if ($('li').hasClass('active')) {
        $('#sidebar__menuWrapper').animate({
            scrollTop: eval($(".active").offset().top - 320)
        }, 500);
    }
</script>
@endpush
