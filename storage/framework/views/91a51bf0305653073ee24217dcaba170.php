
        <?php $__env->startSection('section'); ?>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="col-6">
                        <div class="carousel-container">
                            <div class="shop-image">
                                <img src="<?php echo e(URL::asset('uploads/products/'.$product->picture)); ?>" alt=""
                                    class="shop-fit-image ">
                            </div>
                            <form action="<?php echo e(URL::to('/addToCarts')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="shop-prefer">
                                    <button type="submit" name="addToCart">
                                        <p class="addcart-title1">add cart</p>
                                    </button>
                                    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
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
                                <div class="prod-name" id="product-name">Name:<?php echo e($product->title); ?></div>
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
                                    <span class="items-price">₹<?php echo e($product->price); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="addcart-details">
                            <h4>Product Details</h4>
                            <p>
                               <?php echo e($product->description); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MD. MOKHTAR\Desktop\shoppingCart\shoppingcart\resources\views/addToCart.blade.php ENDPATH**/ ?>