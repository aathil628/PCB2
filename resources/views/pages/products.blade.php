@extends('layouts.layout4')
@php
    $title = 'Products';
    $subtitle = 'Products';
@endphp
@section('title', ' Products || MyFirstPCB ')
@section('content')

<x-strickyHeader/>

    <!--Product Start-->
    <section class="product">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-12">
                    <div class="product__sidebar">
                       
                        

                        <div class="shop-product-recent-products product__sidebar-single">
                            <h3 class="product__sidebar-title">Recent Products</h3>
                            <ul class="clearfix">
                                <li>
                                    <div class="img">
                                        <img src="{{ asset('assets/images/shop/product-thumb-1.jpg') }}" alt="Product">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <h5><a href="#">Classy chair</a></h5>
                                        </div>
                                        <div class="price">
                                            <p>$33.00</p>
                                        </div>
                                        <div class="review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star color"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset('assets/images/shop/product-thumb-2.jpg') }}" alt="Product">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <h5><a href="#">Wooden stool</a></h5>
                                        </div>
                                        <div class="price">
                                            <p>$39.00</p>
                                        </div>
                                        <div class="review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star color"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset('assets/images/shop/product-thumb-3.jpg') }}" alt="Product">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <h5><a href="#">Sofa chair</a></h5>
                                        </div>
                                        <div class="price">
                                            <p>$54.00</p>
                                        </div>
                                        <div class="review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star color"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset('assets/images/shop/product-thumb-4.jpg') }}" alt="Product">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <h5><a href="#">Big sofa</a></h5>
                                        </div>
                                        <div class="price">
                                            <p>$44.00</p>
                                        </div>
                                        <div class="review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star color"></i>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        

                        <!--Start Products Style1 Single Sidear -->
                        
                        <!--End Products Style1 Single Sidebar -->
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12">
                    <div class="product__items">
                        <div class="row">
                            <div class="col-xl-12">
                                
                            </div>
                        </div>

                        <div class="product__all">
                            <div class="row">
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-1.jpg') }}" alt="">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-1.jpg') }}" alt="">
                                        </div>
                                        <div class="product__all-content">
                                            <div class="product__all-review">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <h4 class="product__all-title"><a href="{{ url('product-details') }}">Classy chair</a></h4>
                                            <p class="product__all-price">$33.00</p>
                                            <div class="product__all-btn-box">
                                                <a class="thm-btn product__all-btn" href="{{ url('cart') }}">Pre-book</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-2.jpg') }}" alt="">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-2.jpg') }}" alt="">
                                        </div>
                                        <div class="product__all-content">
                                            <div class="product__all-review">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <h4 class="product__all-title"><a href="{{ url('product-details') }}">Comfy chair</a></h4>
                                            <p class="product__all-price">$68.00</p>
                                            <div class="product__all-btn-box">
                                                <a class="thm-btn product__all-btn" href="{{ url('cart') }}">Pre-book</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-3.jpg') }}" alt="">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-3.jpg') }}" alt="">
                                        </div>
                                        <div class="product__all-content">
                                            <div class="product__all-review">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <h4 class="product__all-title"><a href="{{ url('product-details') }}">Boss chair</a></h4>
                                            <p class="product__all-price">$23.00</p>
                                            <div class="product__all-btn-box">
                                                <a class="thm-btn product__all-btn" href="{{ url('cart') }}">Pre-book</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-4.jpg') }}" alt="">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-4.jpg') }}" alt="">
                                        </div>
                                        <div class="product__all-content">
                                            <div class="product__all-review">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <h4 class="product__all-title"><a href="{{ url('product-details') }}">Sofa chair</a></h4>
                                            <p class="product__all-price">$54.00</p>
                                            <div class="product__all-btn-box">
                                                <a class="thm-btn product__all-btn" href="{{ url('cart') }}">Pre-book</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-5.jpg') }}" alt="">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-5.jpg') }}" alt="">
                                        </div>
                                        <div class="product__all-content">
                                            <div class="product__all-review">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <h4 class="product__all-title"><a href="{{ url('product-details') }}">Wooden stool</a></h4>
                                            <p class="product__all-price">$39.00</p>
                                            <div class="product__all-btn-box">
                                                <a class="thm-btn product__all-btn" href="{{ url('cart') }}">Pre-book</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-6.jpg') }}" alt="">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-6.jpg') }}" alt="">
                                        </div>
                                        <div class="product__all-content">
                                            <div class="product__all-review">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <h4 class="product__all-title"><a href="{{ url('product-details') }}">Big sofa</a></h4>
                                            <p class="product__all-price">$44.00</p>
                                            <div class="product__all-btn-box">
                                                <a class="thm-btn product__all-btn" href="{{ url('cart') }}">Pre-book</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                
                                <!--Product All Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Product End-->

    <!--Newsletter Two Start -->
    
    <!--Newsletter Two End -->

    <!--Contact Info One Start -->
    <section class="contact-info-one">
        <div class="container">
            <ul class="list-unstyled contact-info-one__list">
                <li>
                    <div class="contact-info-one__single">
                        <div class="contact-info-one__icon">
                            <span class="icon-envelope"></span>
                        </div>
                        <div class="contact-info-one__content">
                            <p class="contact-info-one__sub-title">Email Address:</p>
                            <h5 class="contact-info-one__email">
                                <a href="mailto:info@example.com">info@example.com</a>
                            </h5>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="contact-info-one__single">
                        <div class="contact-info-one__icon">
                            <span class="icon-phone"></span>
                        </div>
                        <div class="contact-info-one__content">
                            <p class="contact-info-one__sub-title">Phone Number</p>
                            <h5 class="contact-info-one__email">
                                <a href="tel:001239957689">+00 123 (99) 57689</a>
                            </h5>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="contact-info-one__single">
                        <div class="contact-info-one__icon">
                            <span class="icon-location"></span>
                        </div>
                        <div class="contact-info-one__content">
                            <p class="contact-info-one__sub-title">Our Address</p>
                            <h5 class="contact-info-one__email">1234 Elm Street Springfield,</h5>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--Contact Info One End -->

<x-footer2/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection