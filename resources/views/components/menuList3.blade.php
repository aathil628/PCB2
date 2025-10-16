<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<nav class="main-menu main-menu-two">
  <div class="main-menu-two__wrapper">
    <div class="container">
      <div class="main-menu-two__wrapper-inner">

        <!-- Logo Left -->
        <div class="main-menu-two__left">
          <div class="main-menu-two__logo">
            <a href="{{ url('/') }}">
              <img src="{{ asset('assets/images/resources/logo-2.png') }}" alt="">
            </a>
          </div>
        </div>

        <!-- Desktop Main Menu -->
        <div class="main-menu-two__main-menu-box">
          <ul class="main-menu__list">
            <li class="{{ request()->routeIs('index') ? 'current' : '' }}"><a href="{{ route('index') }}">Home</a></li>
            <li class="dropdown {{ request()->routeIs('course*') ? 'current' : '' }}">
              <a href="#">Course</a>
              <ul class="shadow-box p-0" style="padding:0;">
                <li class="p-0" style="padding:0;">
                  @php
                    $navCourses = (isset($courses) && $courses instanceof \Illuminate\Support\Collection && $courses->count())
                      ? $courses->take(2)
                      : \App\Models\Course::latest()->take(2)->get();
                  @endphp
                  <div class="nav-course-card">
                    <div class="nav-course-card__heade">
                      <a class="nav-course-card__item" href="{{ route('course-details', 1) }}">
                      <div class="nav-course-card__title">PCB Design</div>
                      <div class="nav-course-card__sub">From Concepts to Production</div>
                      </a>
                    </div>
                    <div class="nav-course-card__heade">
                      <a class="nav-course-card__item" href="{{ route('course-details', 2) }}">
                      <div class="nav-course-card__title">Practical PCB Design</div>
                      <div class="nav-course-card__sub">1 Month Journey</div>
                      </a>
                    </div>
                    <div class="nav-course-card__heade">
                      <a class="nav-course-card__item" href="{{ route('course-details', 3) }}">
                      <div class="nav-course-card__title">Advanced PCB Design</div>
                      <div class="nav-course-card__sub">Mastering Design and Analysis</div>
                      </a>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="{{ request()->routeIs('blog*') ? 'current' : '' }}"><a href="{{ route('blog') }}">Blog</a></li>
            <li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a href="{{ route('about') }}">About</a></li>
            <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </div>

        <!-- Desktop Right Controls -->
        <div class="main-menu-two__right d-flex align-items-center">
          <div class="main-menu-two__search-box">
            <a href="{{ url('#') }}" class="main-menu-two__search searcher-toggler-box icon-search"></a>
          </div>
          <div class="main-menu-two__signin-reg d-flex align-items-center">
            @guest
            <a href="{{ route('login') }}" class="user-icon-circle" title="Login">
              <span class="icon-user-plus"></span>
            </a>
            @else
            <a href="#" class="user-icon-circle" title="Profile">
              <a href="{{ route('profile') }}" class="user-icon-circle" title="profile">
                <div class="profile-avatar mb-3"
                  style="width:42px;height:42px;background:#6B73FF;color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:600;font-size:1.3rem;">
                  {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
              </a>
            </a>
            @endguest
          </div>

        </div>

        <!-- Mobile Hamburger Icon -->
        <a href="#" class="mobile-nav__toggler d-none" aria-label="Menu"><i class="fa fa-bars"></i></a>

      </div>
    </div>
  </div>
</nav>

<style>
  /* Desktop Menu */
  .main-menu__list {
    display: flex;
    gap: 30px;
  }

  /* Active state */
  .main-menu__list > li.current > a {
    color: var(--fistudy-primary);
  }

  .main-menu-two__main-menu-box {
    padding-left: 60px;
  }

  .main-menu-two__right {
    display: flex;
    align-items: center;
    gap: 20px;
  }

  .main-menu-two__signin-reg {
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .main-menu-two__signin,
  .main-menu-two__reg {
    padding: 0 6px;
    display: flex;
    align-items: center;
  }

  /* Mobile base styles */
  .mobile-sidebar {
    background: #0a1e46;
    color: #fff;
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 260px;
    overflow-y: auto;
    z-index: 1050;
    padding: 20px;
    transition: transform 0.3s ease-in-out;
    transform: translateX(-100%);
  }

  .mobile-sidebar.open {
    transform: translateX(0);
  }

  .mobile-sidebar .main-menu__list {
    flex-direction: column;
    gap: 10px;
  }

  .mobile-sidebar .shadow-box {
    background: transparent;
    box-shadow: none;
    padding-left: 15px;
  }

  .mobile-sidebar__controls {
    margin-top: 30px;
  }

  @media (max-width: 991px) {

    /* Show hamburger */
    .mobile-nav__toggler {
      display: flex !important;
      font-size: 1.7rem;
      cursor: pointer;
      align-items: center;
    }

    /* Hide desktop menu and right controls */
    .main-menu-two__main-menu-box,
    .main-menu-two__right {
      display: none !important;
    }
  }

  @media (min-width: 992px) {

    /* Hide mobile sidebar and hamburger */
    .mobile-sidebar,
    .mobile-nav__toggler {
      display: none !important;
    }

    .main-menu-two__main-menu-box,
    .main-menu-two__right {
      display: flex !important;
    }
  }
</style>

<style>
  /* Course dropdown card */
  .main-menu__list > li.dropdown:hover .shadow-box { display:block; }
  .nav-course-card {
    width: 320px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 6px 24px rgba(0,0,0,0.08);
    padding: 16px;
    border: 1px solid #E6F4EE;
  }
  .nav-course-card__header { padding: 8px 4px 12px; border-left: 6px solid #DDF4EA; background: #F3FBF7; border-radius: 6px; }
  .nav-course-card__title { font-weight: 700; color: #0A1E46; }
  .nav-course-card__sub { color: #61708A; font-size: 14px; }
  .nav-course-card__list { padding-top: 12px; display: flex; flex-direction: column; gap: 10px; }
  .nav-course-card__item { display: block; padding: 10px 6px; border-radius: 6px; transition: background .2s ease; }
  .nav-course-card__item:hover { background: #F7FBF9; }
  .nav-course-card__item-title { font-weight: 600; color: #0A1E46; }
  .nav-course-card__item-sub { color: #7D8AA3; font-size: 13px; }
</style>

<script>

  // Toggle mobile sidebar open/close
  document.addEventListener('DOMContentLoaded', function () {
    const toggler = document.querySelector('.mobile-nav__toggler');
    const sidebar = document.querySelector('.mobile-sidebar');

    toggler.addEventListener('click', function (e) {
      e.preventDefault();
      sidebar.classList.toggle('open');
      // Optionally: toggle body scroll lock
      document.body.classList.toggle('locked');
    });
  });
</script>