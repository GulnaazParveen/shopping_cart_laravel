
@extends('layouts.layout')
@section('section')
<div class="shoppingcart-section">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex">
                <div class="col-6 " id="shoppingcart">
                    @foreach($cartItem as $item)
                    <div class="addcart-item">
                        <div class="shoppingcart-items">
                            <div class="shoppingcart-image">
                                   <img src="{{URL::asset('uploads/products/'.$item->picture)}}" alt="">
                            </div>
                            <div class="shopping-products">
                                <div class="prod-name">{{$item->title}}</div>
                                <div class="rating" id="rating-items">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="prod-price" id="price-item">
                                    <span class="items-price item1">51% off</span>
                                    <span>
                                        <del class="strikethrough">₹960</del>
                                    </span>
                                    <span class="items-price">₹{{$item->price}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-update">
                            <div class="curd">
                                <span class="crud-icon">
                                    <i class="fa-solid fa-floppy-disk"></i>
                                </span>
                                <span class="icon-text">save for later</span>
                            </div>
                            <div class="curd">
                                <span class="crud-icon">
                                    <i class="fa-solid fa-trash"></i>
                                </span>
                                <span class="icon-text">remove</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-6">
                    <div class="cart-priceDetails">
                        <h3>Price Details</h3>
                        <div class="cart-price-items">
                            <div class="cart-price-item">
                                <p class="cart-price-head">Price(3 items)</p>
                                <p class="cart-price-head">₹960</p>
                            </div>
                            <div class="cart-price-item">
                                <p class="cart-price-head">Dicount</p>
                                <p class="cart-price-discount">-₹560</p>
                            </div>
                            <div class="cart-price-item">
                                <p class="cart-price-head">Delivery Charges</p>
                                <p class="cart-price-discount">FREE Delivery</p>
                            </div>
                            <div class="cart-price-item cart-price-amount">
                                <p class="cart-price-head">Total Amount</p>
                                <p class="cart-price-head">₹400</p>
                            </div>
                        </div>
                        <div class="order-container">
                            <h6 class="cart-info">Clicking on Continue will not deduct any money</h6>
                             <div class="order">
                                  <p>continue</p>
                             </div>
                             <div class="addcart-image">
                                  <img src="img/shopping-cart/cart-8.jpeg" alt="" class="img-fluid">
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection