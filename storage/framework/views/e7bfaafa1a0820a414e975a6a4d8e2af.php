<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>">
    <link rel="preconnect" href="<?php echo e(URL::asset('https://fonts.googleapis.com')); ?>">
    <link rel="preconnect" href="<?php echo e(URL::asset('https://fonts.gstatic.com')); ?>" crossorigin>
    <link rel="stylesheet" href="<?php echo e(URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css')); ?>">
</head>
<body>
    <header>
        <div class="header__top">
            <div class="container-fluid">
                <div class="row disp">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p class="top-heading">Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header_top_link">
                                <a href="<?php echo e(URL::to('/register')); ?>" class="head-link">Sign up</a>
                                <a href="#" class="head-link">Eng</a>
                                <a href="#" class="head-link">FAQS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="header-bottom">
                    <div class="col-lg-3 col-md-3">
                        <div class="header__title">
                            <p class="head-bottom">fashion</p>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="search-container">
                            <input type="text"  placeholder="search here.....">
                               <span class="search-bar">
                                  <i class="fa-solid fa-magnifying-glass"></i>
                               </span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="header-nav-option">
                            <span class="icon"> <i class="fa-regular fa-heart "></i><span class="icon-title">wishlist</span></span>
                            <span class="icon"><i class="fa-solid fa-cart-shopping"></i><span class="icon-title">cart</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 px-0">
                    <nav class="header__menu">
                        <ul class="mb-0 activeControl">
                            <li class="control"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
                            <li class="control"><a href="<?php echo e(URL::to('/shop')); ?>">Shop</a></li>
                            <li class="control"><a href="<?php echo e(URL::to('/addToCart')); ?>">Shopping details</a>
                            </li>
                            <li class="control"><a href="<?php echo e(URL::to('/shoppingCart')); ?>">Shopping Cart</a></li>
                             <?php if(session()->has('id')): ?>
                               <li class="control"><a href="<?php echo e(URL::to('/logout')); ?>">Logout</a></li>
                            <?php else: ?>
                            <li class="control"><a href="<?php echo e(URL::to('/login')); ?>">Login</a></li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <secton class="section">
        <?php echo $__env->yieldContent('section'); ?>
    </secton>
     <!-- Footer Section Begin -->
     <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__about">
                        <div class="header__title">
                            <p class="head-bottom ft-title">fashion</p>
                         </div>
                        <p class="footer-text">The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Trending Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p class="footer-text"> Be the first to know about new arrivals, look books, sales & promos!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email" class="email-text">
                                <button type="submit" class="sub-btn"><span>submit</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer-text">Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script> 2020
                            All rights reserved 
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div> 
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <script src="URL::asset('js/index.js')}}">
    </script>
</body>
</html><?php /**PATH C:\Users\MD. MOKHTAR\Desktop\shoppingCart\shoppingcart\resources\views/layouts/layout.blade.php ENDPATH**/ ?>