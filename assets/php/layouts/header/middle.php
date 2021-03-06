<div class="header-middle">
    <div class="container">
        <div class="header-left">
            <button class="mobile-menu-toggler">
                <span class="sr-only">Toggle mobile menu</span>
                <i class="icon-bars"></i>
            </button>

            <a href="/" class="logo">
                <img src="assets/images/demos/demo-13/logo.png" alt="Molla Logo" width="110" height="25">
            </a>
        </div><!-- End .header-left -->

        <div class="header-right">
            <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                <form action="#" method="get">
                    <div class="header-search-wrapper search-wrapper-wide">

                        <label for="q" class="sr-only">Search</label>
                        <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                    </div><!-- End .header-search-wrapper -->
                </form>
            </div><!-- End .header-search -->




            <div class="dropdown cart-dropdown">
                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    <i class="icon-shopping-cart"></i>
             
                      
                  
                   
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-cart-products">

                        <?php if (isset($carts)) {
                            foreach ($carts as $item) {
                        ?>
                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="/index.php?name=<?= $item->title ?>&pid=<?= $item->product ?>"><?= $item->title ?></a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty"><?= $item->count ?></span>
                                            x <?= $a = number_format($item->prices, 1, "." ) ?>
                                        </span>
                                    </div>
                                    <?php $price = $item->count * $item->prices;
                                    $sum[] = $price ?>
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="<?= $item->image ?>" alt="product">
                                        </a>
                                    </figure>
                                    <a href="" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div>

                        <?  }
                        } ?>

                        <!-- End .product -->

                        <!-- End .product -->
                    </div><!-- End .cart-product -->

                    <div class="dropdown-cart-total">
                        <span>Total</span>

                        <span class="cart-total-price"><?
                        if (isset($sum)) {
                         $order_price = array_sum($sum);
                         echo $a = number_format($order_price, 1, "." );
                        }  ?>
                        
                        </span>
                    </div><!-- End .dropdown-cart-total -->

                    <div class="dropdown-cart-action ">
                        <a href="/index.php?name=cart" class="btn btn-primary">View Cart</a>
                        <form action="./index.php" class="d-inline-block" method="post">
                            <input hidden readonly type="text" value="<?= $order_price ?>" name="price">
                          
                            <button type="submit" class="btn btn-outline-primary-2 mt-1" name="check" value="check"><span>Checkout</span><i class="icon-long-arrow-right"></i></button>
                        </form>

                    </div><!-- End .dropdown-cart-total -->
                </div><!-- End .dropdown-menu -->
            </div><!-- End .cart-dropdown -->
        </div><!-- End .header-right -->
    </div><!-- End .container -->
</div>