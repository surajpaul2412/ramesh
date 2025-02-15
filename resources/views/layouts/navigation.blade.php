<div class="header-dashboard">
    <div class="wrap">
        <div class="header-left">
            <a href="{{ route('admin.dashboard') }}">
                <img id="logo_header_mobile" 
                     src="{{ asset('backend/images/logo/logo.png') }}" 
                     alt="Logo"
                     data-light="{{ asset('backend/images/logo/logo.png') }}" 
                     data-dark="{{ asset('backend/images/logo/logo-dark.png') }}" 
                     data-width="154px" 
                     data-height="52px" 
                     data-retina="{{ asset('backend/images/logo/logo@2x.png') }}">
            </a>
            <div class="button-show-hide">
                <i class="icon-menu-left"></i>
            </div>
            <form class="form-search flex-grow">
                {{-- Search Bar (Optional) --}}
            </form>
        </div>
        <div class="header-grid">
            <div class="header-item button-dark-light">
                <i class="icon-moon"></i>
            </div>
            <div class="header-item button-zoom-maximize">
                <i class="icon-maximize"></i>
            </div>
            <div class="popup-wrap user type-header">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="header-user wg-user">
                            <span class="image">
                                <img src="{{ asset('media/favicon.png') }}" alt="User Avatar">
                            </span>
                            <span class="flex flex-column">
                                <span class="body-title mb-2">{{ Auth::user()->name ?? 'Admin' }}</span>
                                <span class="text-tiny">{{ Auth::user()->role ?? 'Admin' }}</span>
                            </span>
                        </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton3">
                        {{--<li>
                            <a href="{{ route('admin.profile') }}" class="user-item">
                                <div class="icon">
                                    <i class="icon-user"></i>
                                </div>
                                <div class="body-title-2">Account</div>
                            </a>
                        </li>--}}
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="user-item">
                                @csrf
                                <button type="submit" class="user-item w-100 text-left">
                                    <div class="icon">
                                        <i class="icon-log-out"></i>
                                    </div>
                                    <div class="body-title-2">Log out</div>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
