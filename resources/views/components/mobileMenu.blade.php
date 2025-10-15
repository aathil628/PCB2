<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{ url('home') }}" aria-label="logo image"><img
                    src="{{ asset('assets/images/resources/logo-2.png') }}" width="105" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav___container">
            <ul class="mobile-nav__list">
                <li class="dropdown collapsible">
                    <a href="javascript:void(0)" class="collapsible-toggle">
                        Courses
                        <span class="arrow">></span>
                    </a>
                    <ul class="collapsible-content">
                        @foreach($courses as $course)
                        <li><a href="{{ route('course-details', $course->id) }}">{{ $course->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>

            </ul>


        </div>
        <!-- /.mobile-nav__container -->


        <ul class="mobile-nav__contact list-unstyled">
            <li class="main-menu-two__search">
                <i class="fa fa-search"></i>
                <a href="{{ url('#') }}">Search</a>
            </li>
            <li>
                <i class="fa fa-user"></i>
                @guest
                <a href="{{ route('login') }}" class="mobile-nav__login-link">Login</a>
                @else
                <a href="{{ route('profile') }}" class="mobile-nav__logout-link">profile</a>
                @endguest

            </li>
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:contact@myfirstpcb.com">contact@myfirstpcb.com</a>
            </li>
            <li>
                <i class="fas fa-phone"></i>
                <a href="tel:666-888-0000">+91 85908 70849</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="https://www.linkedin.com/in/my-first-pcb-89273b380/"><span class="fab fa-linkedin-in"></span></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->

    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<style>
    .mobile-nav__list {
        list-style: none;
        padding-left: 0;
        margin: 0;
        font-family: sans-serif;
        color: #fff;
    }

    .mobile-nav__list>li {
        padding: 12px 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.12);
        position: relative;
    }

    .mobile-nav__list>li a,
    .collapsible-toggle {
        text-decoration: none;
        color: #ffffff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 600;
        font-size: 1.1rem;
        cursor: pointer;
    }

    /* Arrow style */
    .arrow {
        font-weight: bold;
        transition: transform 0.3s ease;
    }

    /* Collapsible sublist initial state hidden */
    .collapsible-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease;
        padding-left: 20px;
        margin-top: 8px;
    }

    /* Sublist links */
    .collapsible-content li {
        padding: 10px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .collapsible-content li:last-child {
        border-bottom: none;
    }

    .collapsible-content li a {
        font-weight: normal;
        font-size: 1rem;
        color: #ddd;
    }

    /* When expanded */
    .dropdown.collapsible.open .collapsible-content {
        max-height: 500px;
        /* adjust max-height as needed */
    }

    /* Rotate arrow when open */
    .dropdown.collapsible.open .arrow {
        transform: rotate(90deg);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggles = document.querySelectorAll('.collapsible-toggle');

        toggles.forEach(toggle => {
            toggle.addEventListener('click', function () {
                const parent = this.parentElement;
                parent.classList.toggle('open');
            });
        });
    });

</script>