<!DOCTYPE html> 
<link href="assets/css/bootstrap.rtl.css" rel="stylesheet" />
<!-- FONT AWESOME ICONS -->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!-- CUSTOM STYLE -->
<link href="assets/css/style.css" rel="stylesheet" />
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
    </div>
    <div class="col-lg-9"> 
    	<div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        
    </div>
  </div>
</div>
<!-- /container -->
</div>
<!-- CONTENT-WRAPPER SECTION END-->

<?php include 'footer.php'; ?>
</body>
</html>