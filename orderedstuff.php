<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<body>
<?php if(isadmin()): ?>
    <!-- MENU SECTION END-->

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">پنل مخصوص ادمین  &nbsp;  &nbsp;  >>  &nbsp;  &nbsp;  مشاهده لیست کالاهای سفارش داده شده </h4>
                </div>
            </div>
            
            <div class="row">



              <!-- Contents go here -->
</div>
</div>
</div>


    <!-- CONTENT-WRAPPER SECTION END-->



    <?php include 'footer.php'; ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
	
	<?php else: ?>
<div class="container">
  <div class="alert alert-danger fade in myalert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <h1> شما حق دسترسی به این صفحه را ندارید. </h1>
    <a href="index.php"><h4>بازگشت به صفحه اصلی</h4></a>
  </div>
</div>
<?php endif; ?>
   
</body>
</html>