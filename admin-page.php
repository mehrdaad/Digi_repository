<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php if(!isadmin()) header("Location: index.php"); ?>
<body>
<div class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4 class="page-head-line">پنل مخصوص ادمین</h4>
      </div>
    </div>
    <div class="row"> <a href="addstaff.php">
      <div class="col-md-4 col-sm-4 col-xs-8">
        <div class="dashboard-div-wrapper bk-clr-two"> <i  class="fa fa-edit dashboard-div-icon" ></i>
          <div class="progress progress-striped "></div>
          <h5>اضافه کردن کالا </h5>
        </div>
      </div>
      </a> <a href="orderedstuff.php">
      <div class="col-md-4 col-sm-4 col-xs-8">
        <div class="dashboard-div-wrapper bk-clr-three"> <i  class="fa fa-edit dashboard-div-icon" ></i>
          <div class="progress progress-striped "></div>
          <h5>مشاهده لیست کالاهای سفارش داده شده </h5>
        </div>
      </div>
      </a> <a href="showconfirmedstauff.php">
      <div class="col-md-4 col-sm-4 col-xs-8">
        <div class="dashboard-div-wrapper bk-clr-four"> <i  class="fa fa-edit dashboard-div-icon" ></i>
          <div class="progress progress-striped "></div>
          <h5>مشاهده لیست کالاهای تایید شده </h5>
        </div>
      </div>
      </a> </div>
  </div>
</div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->
<?php include 'footer.php'; ?>
<!-- FOOTER SECTION END--> 
<!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  --> 
<!-- CORE JQUERY SCRIPTS --> 
</body>
</html>