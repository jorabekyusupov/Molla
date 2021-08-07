<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">

    </nav>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-xl-4-5col">
                    <div class="row">
                        <?php
                        if ( isset($producte)) {
                            # code...

                            foreach ($producte as $item) { ?>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="product product-2">
                                        <figure class="product-media">

                                            <a href="/index.php?name=<?= $item->title ?>&pid=<?= $item->id ?>">

                                                <img src="<?= $item->image ?>" alt="Product image" class="product-image">

                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                            </div><!-- End .product-action -->

                                            <div class="product-action d-flex justify-content-center align-center">
                                            <form action="./assets/php/action/checkout.php" class="" method="post">
                                                        <input type="text" name="id" hidden readonly value="<?= $item->id ?>">
                                                        <input type="text" name="cid" hidden readonly value="<?= $item->cid ?>">
                                                        <input type="text" name="order_date" hidden readonly value="<?= date("Y-m-d")?>">
                                                        <input type="text" name="price" hidden readonly value="<?= $item->price ?>">
                                                        <input type="text" name="href" hidden readonly value="<?= $item->href ?>">
                                                    <button type="submit" class="btn-product btn-cart" value="cart" name="cart"><span>add to cart</span></button>
                                                </form>
                                            </div>



                                            <!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#"><?= $item->category ?></a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="/index.php?name=<?= $item->title ?>&pid=<?= $item->id ?>"><?= $item->title ?></a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price"><?=$a = number_format($item->price, 1, "." ) ?> So'm</span>
                                                <!-- <span class="old-price">Was $349.99</span> -->
                                            </div><!-- End .product-price -->



                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div>
                        <?php }
                        } ?>
                    </div>


                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item-total">of 2</li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- End .col-lg-9 -->

                <?php //include "./assets/php/layouts/category_mini.php";  ?>
</main>