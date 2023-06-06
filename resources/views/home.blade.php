@extends('layouts.app')

@section('content')
    <section id="home-section" class="hero">
        <div class="home-slider js-fullheight owl-carousel">
            @foreach ($products as $product)
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third order-md-last img js-fullheight" style="background-image:url({{ asset('/assets/images/bg_1.jpg') }});">
                        </div>
                        <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Winkel eCommerce Shop</span>
                                <div class="horizontal">
                                    <h3 class="vr" style="background-image: url({{ asset('/assets/images/divider.jpg') }});">Stablished Since
                                        2000</h3>
                                    <h1 class="mb-4 mt-3">{{$product->name}}</h1>
                                    <p>{{$product->description}}</p>
                                    <p><a href="{{route("products.show", $product->id)}}" class="btn btn-primary px-5 py-3 mt-3">Купить Сейчас</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('/assets/images/about.jpg') }});">
                    <a href="https://vimeo.com/45830194"
                        class="icon popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section-bold mb-4 mt-md-5">
                        <div class="ml-md-0">
                            <h2 class="mb-4">Better Way to Ship Your Products</h2>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious
                            Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
                            agency, where they abused her for their.</p>
                        <div class="row ftco-services">
                            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                                        <span class="flaticon-002-recommended"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">Refund Policy</h3>
                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                            almost unorthographic.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                                        <span class="flaticon-001-box"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">Premium Packaging</h3>
                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                            almost unorthographic.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                                        <span class="flaticon-003-medal"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">Superior Quality</h3>
                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                            almost unorthographic.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Best Sellers</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($best_products as $product)
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="product">
                            <a href="{{route("products.show", $product->id)}}" class="img-prod"><img class="img-fluid" src="{{ asset('/assets/images/product-4.jpg') }}"
                                    alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 px-3">
                                <h3><a href="#">{{$product->name}}</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>{{$product->price}} ₽</span></p>
                                    </div>
                                    <div class="rating">
                                        <p class="text-right">
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <p class="bottom-area d-flex px-3">
                                    <a href="#" onclick="event.preventDefault();document.getElementById('add_to_cart').submit();" class="add-to-cart text-center py-2 mr-1">
                                        <span>Add to cart <i class="ion-ios-add ml-1"></i></span>
                                    </a>
                                    <form method="POST" action="{{ route("add_to_cart", $product->id) }}" id="add_to_cart">
                                        @csrf
                                        <input type="hidden" name="quantity" value="1" />
                                    <a href="#" class="buy-now text-center py-2">Buy now<span><i
                                                class="ion-ios-cart ml-1"></i></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
