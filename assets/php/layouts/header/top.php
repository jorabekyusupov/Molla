<div class="header-top">
    <div class="container">
        <div class="header-left">
            <ul class="top-menu">
                <li>
                    <a href="#">Links</a>
                    <ul>
                        <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                    </ul>
                </li>
            </ul><!-- End .top-menu -->
        </div><!-- End .header-left -->

        <div class="header-right">
            <!-- <ul class="top-menu top-link-menu">
                <li>
                    <a href="#">Links</a>
                    <ul>
                        <li>
                                
                            <a href="<?= isset($_SESSION['username']) ? "#"  : '/index.php?lname=login' ?>" ><i class="icon-user"></i><?= isset($_SESSION['username']) ? $_SESSION['username']  : 'login' ?></a>
                       
                        </li>
                    </ul>
                </li>
            </ul>End .top-menu -->

            <div class="header-dropdown">
                <a href="<?= isset($_SESSION['username']) ? "#"  : '/index.php?lname=login' ?>"><i class="icon-user"></i> <?= isset($_SESSION['username']) ? $_SESSION['username']  : 'login' ?></a>
                <div class="header-menu <?= isset($_SESSION['username']) ? ""  : 'd-none' ?>">
                    <ul>
                        <li><a href="./assets/php/action/logaut.php">Logout</a></li>

                    </ul>
                </div><!-- End .header-menu -->
            </div><!-- End .header-dropdown -->
            <div class="header-dropdown">
                <a href="#">USD</a>
                <div class="header-menu">
                    <ul>
                        <li><a href="#">Eur</a></li>
                        <li><a href="#">Usd</a></li>
                    </ul>
                </div><!-- End .header-menu -->
            </div><!-- End .header-dropdown -->

            <div class="header-dropdown mr-5">
                <a href="#">Eng</a>
                <div class="header-menu">
                    <ul>
                        <li><a href="#">English</a></li>
                        <li><a href="#">French</a></li>
                        <li><a href="#">Spanish</a></li>
                    </ul>
                </div><!-- End .header-menu -->
            </div>
            <a href="/admin/"><i class="icon-user"></i> </a>
                <!-- End .header-dropdown -->
        </div><!-- End .header-right -->
    </div><!-- End .container -->
</div>