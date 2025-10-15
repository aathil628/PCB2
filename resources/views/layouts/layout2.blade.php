<!DOCTYPE html>
<html lang="en">

<x-head/>

<style>
    .page-header {
        margin-top: -100px; /* Moves the section upwards */
    }
</style>

<body <?php echo (isset($bodyClass) ? 'class="' . $bodyClass . 'custom-cursor"' : 'class="custom-cursor"'); ?>>
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="page-wrapper">
        <header class="main-header main-header-three">
            <!-- <div class="main-menu__top">
                <div class="container">
                    <div class="main-menu__top-inner">
                        <ul class="list-unstyled main-menu__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="icon-email"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:support@example.com">support@example.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-contact"></i>
                                </div>
                                <div class="text">
                                    <p><a href="tel:1212345678900">+12 (123) 456 78900</a></p>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-unstyled main-menu__contact-list main-menu__location">
                            <li>
                                <div class="icon">
                                    <i class="icon-location"></i>
                                </div>
                                <div class="text">
                                    <p>684 West College St. Sun City, USA</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <x-menuList/>
        </header>
        

            <!--Page Header Start-->
            <section class="page-header">
                <div class="page-header__bg" style="background-image: url({{ asset('assets/images/shapes/page-header-bg-shape.png') }});">
                </div>
                <div class="page-header__shape-4">
                    <img src="{{ asset('assets/images/shapes/page-header-shape-4.png') }}" alt="">
                </div>
                <div class="page-header__shape-5">
                    <img src="{{ asset('assets/images/shapes/page-header-shape-5.png') }}" alt="">
                </div>
                <div class="page-header__social">
                    <a href="#">Facebook</a>
                    <span>//</span>
                    <a href="#">Instagram</a>
                    <span>//</span>
                    <a href="#">LinkedIn</a>
                    <span>//</span>
                    <a href="#">Twitter</a>
                
            </section>
            <!--Page Header End-->

            @yield('content')

    <x-loader/>

   <x-scripts/>

</body>

</html>

