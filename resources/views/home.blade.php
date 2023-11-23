@extends('layouts.layout')
@section('section')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="home-image" >
                <img src="img/hero-1.jpg" alt="" style="max-width: 100%; height: auto; display: block;">
            </div>
        </div>
        <div class="home-container">
            <div class="home-contain-text">
                <h6 class="home-title">Summer Collection</h6>
                <h2 class="home-mainTitle">Fall - Winter Collections 2023</h2>
                <p class="home-text">A specialist label creating luxury essentials. Ethically crafted with an unwavering commitment to exceptional quality.</p>
                <a href="#" class="primary-btn">Shop now</a>
            </div>
        </div>
    </div>
</div>
<div class="product-section">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <p class="product-title">best seller</p>
            </div>
            <div class="col-12 product-conainer">
                @foreach($allProducts as $item)
                <div class="col-3 product-item">
                    <div class="prod-img">
                        <span class="heart-icon">
                            <i class="fa-regular fa-heart"></i>
                        </span>                        
                        <a href="{{URL::to('/addToCart/'.$item->id)}}"><img src="{{URL::asset('uploads/products/'.$item->picture)}}" alt=""></a>
                    </div>
                    <div class="prod-details">
                        <div class="prod-name">{{$item->title}}</div>
                        <div class="prod-price">₹{{$item->price}}</div>
                        <div class="rating">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-12 product-conainer mt-3 ">
              @foreach($allProductsAgain as $items)
                <div class="col-3 product-item">
                    <div class="prod-img">
                        <span class="heart-icon">
                            <i class="fa-regular fa-heart"></i>
                        </span>                        
                        <a href="{{URL::to('/addToCart/'.$items->id)}}"><img src="{{URL::asset('uploads/products2/'.$items->picture)}}" alt=""></a
   >                 </div>
                    <div class="prod-details">
                        <div class="prod-name">{{$items->title}}</div>
                        <div class="prod-price">₹{{$items->price}}</div>
                        <div class="rating">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="store-container">
    <div class="container mt-4 ml-4 pl-0">
        <div class="row mr-5 ml-0 ">
            <div class="col-12 store">
                <div class="col-5 mt-4">
                    <a href="{{URL::to('/addToCart')}}"><img src="img/product/womanstore.jpg" alt=""></a
  >              </div>
                <div class="col-4">
                    <a href="{{URL::to('/addToCart')}}"><img src="img/product/man.jpg" alt=""></a
         >       </div>
                <div class="col-3">
                    <a href="{{URL::to('/addToCart')}}"><img src="img/product/kids.jpg" alt=""></a
        >        </div>
            </div>
        </div>
    </div>
</div>
<div class="essential-container">
    <div class="container">
        <div class="row ">
            <div class="col-12 essential-contain">
                <div class="col-4 essential-title">
                    <h2>essentials </h2>
                     <p class="essentail-subheading">view all</p>
                </div>
                <div class="col-2">
                    <a href="{{URL::to('/addToCart')}}"><img src="img/product/decoration.jpg" alt=""></a
  >              </div>
                <div class="col-2">
                  <a href="{{URL::to('/addToCart')}}"><img src="img/product/health.jpg" alt=""></a
        >        </div>
                <div class="col-2">
                  <a href="{{URL::to('/addToCart')}}"><img src="img/product/kitchen.jpg" alt=""></a
       >         </div>
            </div>
        </div>
    </div>
</div>
@endsection
