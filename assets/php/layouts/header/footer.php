<div class="header-bottom sticky-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="dropdown category-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                        Browse Categories
                    </a>

                    <div class="dropdown-menu">
                        <nav class="side-nav">
                            <ul class="menu-vertical sf-arrows">

                                <?php foreach ($category as $item) {
                                    $_SESSION['href'] =$item->href  ?>
                                    <li class="megamenu-container">
                                        
                                        <a class="sf-with-ul" href="/index.php?sname=products&name=<?= $item->href ?>&id=<?= $item->id ?>"><?= $item->name ?></a>


                                      <!-- End .megamenu -->

                                    </li>
                                <? } ?>
                            </ul><!-- End .menu-vertical -->
                        </nav><!-- End .side-nav -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .category-dropdown -->
            </div><!-- End .col-lg-3 -->

            <div class="col-lg-9">
                <!-- End .main-nav -->
            </div><!-- End .col-lg-9 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div>