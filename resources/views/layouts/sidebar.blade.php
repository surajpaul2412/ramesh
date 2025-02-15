<div class="section-menu-left">
    <div class="box-logo">
        <a href="{{ route('admin.dashboard') }}" id="site-logo-inner">
            <img id="logo_header" alt="Logo" src="{{ asset('images/logo/logo.png') }}" data-light="{{ asset('images/logo/logo.png') }}" data-dark="{{ asset('images/logo/logo-dark.png') }}">
        </a>
        <div class="button-show-hide">
            <i class="icon-menu-left"></i>
        </div>
    </div>

    <div class="center">
        <div class="center-item">
            <div class="center-heading">Main Home</div>
            <ul class="menu-list">
                <li class="menu-item has-children {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-item-button">
                        <div class="icon"><i class="icon-grid"></i></div>
                        <div class="text">Dashboard</div>
                    </a>
                    <ul class="sub-menu" style="display: block;">
                        <li class="sub-menu-item">
                            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                                <div class="text">Dashboard</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="center-item">
            <div class="center-heading">Ecommerce</div>
            <ul class="menu-list">
                <li class="menu-item">
                    <a href="{{route('admin.types.index')}}" class="">
                        <div class="icon"><i class="icon-database"></i></div>
                        <div class="text">Types</div>
                    </a>
                </li>
            </ul>
            <ul class="menu-list">
                <li class="menu-item has-children {{ request()->routeIs('admin.products*') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-item-button">
                        <div class="icon"><i class="icon-shopping-cart"></i></div>
                        <div class="text">Categories</div>
                    </a>
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a href="{{ route('admin.products.create') }}" class="{{ request()->routeIs('admin.products.create') ? 'active' : '' }}">
                                <div class="text">Categories</div>
                            </a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="{{ route('admin.products') }}" class="{{ request()->routeIs('admin.products') ? 'active' : '' }}">
                                <div class="text">Sub Categories</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item has-children {{ request()->routeIs('admin.products*') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-item-button">
                        <div class="icon"><i class="icon-shopping-cart"></i></div>
                        <div class="text">Products</div>
                    </a>
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a href="{{ route('admin.products.create') }}" class="{{ request()->routeIs('admin.products.create') ? 'active' : '' }}">
                                <div class="text">Add Product</div>
                            </a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="{{ route('admin.products') }}" class="{{ request()->routeIs('admin.products') ? 'active' : '' }}">
                                <div class="text">Product List</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
