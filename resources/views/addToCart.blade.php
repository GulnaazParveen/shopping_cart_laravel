@extends('layouts.layout')
        @section('section')
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="col-6">
                        <div class="carousel-container">
                            <div class="shop-image">
                                <img src="{{URL::asset('uploads/products/'.$product->picture)}}" alt=""
                                    class="shop-fit-image ">
                            </div>
                            <form action="{{URL::to('/addToCarts')}}" method="POST">
                                @csrf
                                <div class="shop-prefer">
                                    <button type="submit" name="addToCart">
                                        <p class="addcart-title1">add cart</p>
                                    </button>
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <a href="">
                                        <p class="addcart-title">buy now</p>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="addcart-box">
                            <div class="shopping-products">
                                <div class="prod-name" id="product-name">Name:{{$product->title}}</div>
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
                                    <span class="items-price">₹{{$product->price}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="addcart-details">
                            <h4>Product Details</h4>
                            <p>
                               {{$product->description}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection