<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<body>
<?php 
$admin=false;
if($admin)include 'admin-menu.php'; ?>
<!-- MENU SECTION END-->

<div class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="panel-group">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h4 class="h4">فیلتر کردن نمایش</h4>
            </div>
            <div class="panel-body">
              <h4 class="h4">مرتب سازی بر اساس </h4>
              <div class="radio">
                <label>
                  <input type="radio" name="sortby">
                  قیمت</label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="sortby">
                  تاریخ ثبت</label>
              </div>
              <div class="radio disabled">
                <label>
                  <input type="radio" name="sortby">
                  نام</label>
              </div>
              <hr>
              <h4 class="h4">نوع مرتب سازی</h4>
              <div class="radio">
                <label>
                  <input type="radio" name="sort">
                  صعودی</label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="sort">
                  نزولی</label>
              </div>
              <hr>
              <h4 class="h4">وضعیت کالا</h4>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="mojood" value="" checked>
                  موجود</label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="mojood" value="">
                  ناموجود</label>
              </div>
              <hr>
              <h4 class="h4">محدودیت قیمت</h4>
              <div class="form-group">
                <label for="email">از</label>
                <input type="number" placeholder="کف قیمت به ریال" class="form-control" id="kaf">
              </div>
              <div class="form-group">
                <label for="email">تا</label>
                <input type="number" placeholder="سقف قیمت به ریال" class="form-control" id="saghf">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row">
          <div class="col-md-4" >
            <div class="bordered" style="padding-bottom:10px;">
              <div style="text-align:center !important"><a href="show_mobile_details.php"><img src="assets/img/lenovo1.jpg"></a></div>
              <div style="text-align:center; font-family: caption !important;">
                <div>Lenovo Z5110 Ideapad</div>
                <div>تومان 2,8500,000</div>
                <div class="row">
                  <div class="col-sm-6">موجود</div>
                  <div class="col-sm-6"><?php if(islogin()):?><img src="assets/img/shopping.jpg" style="cursor:pointer" role="button"><?php endif;?></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4" >
            <div class="bordered" style="padding-bottom:10px;">
              <div style="text-align:center !important"><a href="show_mobile_details.php"><img src="assets/img/lenovo2.jpg"></a></div>
              <div style="text-align:center; font-family: caption !important;">
                <div>Lenovo Z5110 Ideapad</div>
                <div>تومان 2,8500,000</div>
                <div class="row">
                  <div class="col-sm-6">موجود</div>
                  <div class="col-sm-6"><?php if(islogin()):?><img src="assets/img/shopping.jpg" style="cursor:pointer" role="button"><?php endif;?></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4" >
            <div class="bordered" style="padding-bottom:10px;">
              <div style="text-align:center !important"><a href="show_mobile_details.php"><img src="assets/img/lenovo3.jpg"></a></div>
              <div style="text-align:center; font-family: caption !important;">
                <div>Lenovo Z5110 Ideapad</div>
                <div>تومان 2,8500,000</div>
                <div class="row">
                  <div class="col-sm-6">موجود</div>
                  <div class="col-sm-6"><?php if(islogin()):?><img src="assets/img/shopping.jpg" style="cursor:pointer" role="button"><?php endif;?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-4" >
            <div class="bordered" style="padding-bottom:10px;">
              <div style="text-align:center !important"><a href="show_mobile_details.php"><img src="assets/img/lenovo4.jpg"></a></div>
              <div style="text-align:center; font-family: caption !important;">
                <div>Lenovo Z5110 Ideapad</div>
                <div>تومان 2,8500,000</div>
                <div class="row">
                  <div class="col-sm-6">موجود</div>
                  <div class="col-sm-6"><?php if(islogin()):?><img src="assets/img/shopping.jpg" style="cursor:pointer" role="button"><?php endif;?></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4" >
            <div class="bordered" style="padding-bottom:10px;">
              <div style="text-align:center !important"><a href="show_mobile_details.php"><img src="assets/img/lenovo3.jpg"></a></div>
              <div style="text-align:center; font-family: caption !important;">
                <div>Lenovo Z5110 Ideapad</div>
                <div>تومان 2,8500,000</div>
                <div class="row">
                  <div class="col-sm-6">موجود</div>
                  <div class="col-sm-6"><?php if(islogin()):?><img src="assets/img/shopping.jpg" style="cursor:pointer" role="button"><?php endif;?></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4" >
            <div class="bordered" style="padding-bottom:10px;">
              <div style="text-align:center !important"><a href="show_mobile_details.php"><img src="assets/img/lenovo1.jpg"></a></div>
              <div style="text-align:center; font-family: caption !important;">
                <div>Lenovo Z5110 Ideapad</div>
                <div>تومان 2,8500,000</div>
                <div class="row">
                  <div class="col-sm-6">موجود</div>
                  <div class="col-sm-6"><?php if(islogin()):?><img src="assets/img/shopping.jpg" style="cursor:pointer" role="button"><?php endif;?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>