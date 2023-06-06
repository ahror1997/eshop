@extends('layouts.app')

@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('assets/images/bg_6.jpg') }}');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Cart</span></p>
                    <h1 class="mb-0 bread">My Cart</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart_products as $cart_product)
                                    <tr class="text-center">
                                        <td class="product-remove">
                                            <a href="#"><span class="ion-ios-close"></span></a>
                                        </td>
                                        <td class="image-prod">
                                            <div class="img" style="background-image:url({{ asset('assets/images/product-3.jpg') }});"></div>
                                        </td>
                                        <td class="product-name">
                                            <h3>{{$cart_product->product->name}}</h3>
                                            <p>{{$cart_product->product->description}}</p>
                                        </td>
                                        <td class="price">{{$cart_product->product->price}} ₽</td>
                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <input type="text" name="quantity" class="quantity form-control input-number"
                                                    value="{{$cart_product->quantity}}" min="1" max="100">
                                            </div>
                                        </td>
                                        <td class="total">{{$cart_product->product->price * $cart_product->quantity}} ₽</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Cart Totals</h3>
                        {{-- <p class="d-flex">
                            <span>Subtotal</span>
                            <span>$20.60</span>
                        </p>
                        <p class="d-flex">
                            <span>Delivery</span>
                            <span>$0.00</span>
                        </p>
                        <p class="d-flex">
                            <span>Discount</span>
                            <span>$0.00</span>
                        </p> --}}
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span>{{$total_sum}} ₽</span>
                        </p>
                    </div>
                    <p class="text-center"><a href="{{route("checkout")}}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                // If is not undefined
                $('#quantity').val(quantity + 1);
                // Increment
            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                // If is not undefined
                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>
@endsection
