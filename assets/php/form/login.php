<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">

    </nav><!-- End .breadcrumb-nav -->

    <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
        <div class="container">
            <div class="form-box">
                <div class="form-tab">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="true">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">

                            <form action="./assets/php/action/singin.php" method="POST">
                                <div class="form-group">
                                    <label for="singin-email-2">User Name</label>
                                    <input type="text" class="form-control" id="singin-email-2" name="username" required>
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="singin-password-2">Password</label>
                                    <input type="password" class="form-control" id="singin-password-2" name="password" required>
                                </div><!-- End .form-group -->

                                <div class="form-footer">
                                    <button type="submit" name="login" class="btn btn-outline-primary-2">
                                        <span>LOG IN</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>


                                </div><!-- End .form-footer -->
                            </form>

                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">

                            <form action="./assets/php/action/register.php" method="POST">
                                <div class="form-group">
                                    <label for="register-email-2">User Name</label>
                                    <input type="text" class="form-control" id="register-email-2" name="username" required>
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="">Password </label>
                                    <input type="password" class="form-control" id="" name="password" required>
                                </div><!-- End .form-group -->

                                <div class="form-footer">
                                    <button type="submit" name="signup" value="signup" class="btn btn-outline-primary-2">
                                        <span>SIGN UP</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>


                                </div><!-- End .form-footer -->
                            </form>

                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .form-tab -->
            </div><!-- End .form-box -->
        </div><!-- End .container -->
    </div><!-- End .login-page section-bg -->
</main>

<?php 
  if (isset($_GET['message'])) {
    $message = $_GET['message'];
    echo "<script>alert('$message')</script>";
  
  }
?>
