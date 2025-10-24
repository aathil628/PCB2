<nav class="main-menu">
    <div class="main-menu__wrapper">
        <div class="container">
            <div class="main-menu__wrapper-inner d-flex align-items-center justify-between-space">
                <div class="main-menu__left">
                    <div class="main-menu__logo">
                        <a href={{ url('/') }}><img src="{{ asset('assets/images/resources/logo-2.png') }}" alt="">                        </a>
                    </div>
                </div>
                <div class="main-menu__main-menu-box">
                    <ul class="main-menu__list">
                        <li class="{{ request()->routeIs('index') ? 'current' : '' }}"><a href="{{ route('index') }}">Home</a></li>
                        <li class="dropdown {{ request()->routeIs('course*') ? 'current' : '' }}">
                            <a href="#">Course</a>
                            <ul class="shadow-box course-dd">
                                <li class="dd-card">
                                    <div class="dd-head-inner">
                                        <h6 class="dd-title">PCB Kickstart Course</h6>
                                        <p class="dd-sub">3-Day (Age 8–21)</p>
                                    </div>
                                    <a class="dd-item" href="{{ route('course-details', 2) }}">
                                        <span class="dd-item-title">PCB Maker Course </span>
                                        <span class="dd-item-sub">1-Month (Age 8–21)</span>
                                    </a>
                                    <a class="dd-item" href="{{ route('course-details', 3) }}">
                                        <span class="dd-item-title">Electronics Innovation Program </span>
                                        <span class="dd-item-sub">1-Year (Age 8–21)</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ request()->routeIs('blog*') ? 'current' : '' }}"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a href="{{ route('about') }}">About</a></li>
                        <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="main-menu__right">
                    <div class="main-menu__search-cart-box d-none">
                        <div class="main-menu__search-box">
                            <a href={{ url('#') }} class="main-menu__search searcher-toggler-box icon-search"></a>
                        </div>
                        <div class="main-menu__cart">
                            <a href={{ url('#') }}><span class="fas fa-shopping-cart"></span></a>
                        </div>
                    </div>
                    <div class="main-menu__btn-boxes">
                        <div class="main-menu__btn-box-1">
                            @guest
                            <a href="{{ route('login') }}" class="thm-btn">Login</a>
                            @else
                            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                @csrf
                                <button type="submit" class="thm-btn" style="background: none; border: none; color: inherit; cursor: pointer;">Logout</button>
                            </form>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
 

