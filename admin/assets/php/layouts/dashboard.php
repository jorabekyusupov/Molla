<div class="row ">
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-statistic-4">
        <div class="align-items-center justify-content-between">
          <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
              <div class="card-content">
                <h5 class="font-15">Orders</h5>
                <?php foreach ($o_counts as $item) {  ?>

                  <h2 class="mb-3 font-18"><?= $item->orders ?></h2>
                <? } ?>
                <p class="mb-0"><span class="col-green">10%</span> Increase</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
              <div class="banner-img">
                <img src="assets/img/blog/1.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-statistic-4">
        <div class="align-items-center justify-content-between">
          <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
              <div class="card-content">
                <h5 class="font-15">Customers</h5>
                <?php foreach ($c_counts as $item) {  ?>

                  <h2 class="mb-3 font-18"><?= $item->customers ?></h2>
                <? } ?>
                <p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
              <div class="banner-img">
                <img src="assets/img/blog/2.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-statistic-4">
        <div class="align-items-center justify-content-between">
          <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
              <div class="card-content">
                <h5 class="font-15">Products</h5>
                <?php foreach ($p_counts as $item) {  ?>

                  <h2 class="mb-3 font-18"><?= $item->products ?></h2>
                <? } ?>
                <p class="mb-0"><span class="col-green">18%</span>
                  Increase</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
              <div class="banner-img">
                <img src="assets/img/blog/3.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-statistic-4">
        <div class="align-items-center justify-content-between">
          <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
              <div class="card-content">
                <h5 class="font-15">Daily Sales</h5>
                <?php foreach ($o_sums as $item) {  ?>

                  <h2 class="mb-3 font-18"><?= $a = number_format($item->sum, 1, "." ) ?> So'm</h2>
                <? } ?>
                <p class="mb-0"><span class="col-green">42%</span> Increase</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
              <div class="banner-img">
                <img src="assets/img/blog/4.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

