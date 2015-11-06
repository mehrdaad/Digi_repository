<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<body>
<?php 
$admin=false;
if($admin)include 'admin-menu.php'; ?>
<div class="content-wrapper">
  <div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active"> <a href="#"><img src="assets/img/1.jpg" alt="Chania" class="myimg"> </a></div>
        <div class="item"> <a href="#"><img src="assets/img/2.jpg" alt="Chania" class="myimg"></a> </div>
        <div class="item"> <a href="#"><img src="assets/img/3.jpg" alt="Flower" class="myimg"> </a></div>
        <div class="item"> <a href="#"><img src="assets/img/4.jpg" alt="Flower" class="myimg"></a> </div>
      </div>
      
      <!-- Left and right controls --> 
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    <div class="panel panel-default margin-top padding-top">
      <div class="row">
        <div class="col-md-3 text-center">
        <a href="#">
          <div><img src="assets/img/t1.jpg"></div>
          <div>ظروف و وسایل یکبار مصرف</div>
        </a>
        </div>
        <div class="col-md-3 text-center">
        <a href="#">
          <div><img src="assets/img/t2.jpg"></div>
          <div>انگشتر و دستبند</div>
        </a>
        </div>
        <div class="col-md-3 text-center">
        <a href="#">
          <div><img src="assets/img/t3.jpg"></div>
          <div>حوله خواهران مخصوص مو</div>
        </a>
        </div>
        <div class="col-md-3 text-center">
        <a href="#">
          <div><img src="assets/img/t4.jpg"></div>
          <div>کیف و وسایل چرمی فقط در چرم کده</div>
         </a>
        </div>
      </div>
    </div>
    
    <div class="panel panel-default margin-top padding-top">
      <div class="row">
        
        
        <div class="col-md-3 text-center">
        <a href="#">
          <div><img src="assets/img/t5.jpg"></div>
          <div>اسباب بازی کودکان</div>
        </div>
        </a>
        <div class="col-md-3 text-center">
        <a href="#">
          <div><img src="assets/img/t6.jpg"></div>
          <div>آموزش ساخت عروسک</div>
        </a>
        </div>
        <div class="col-md-3 text-center">
        <a href="#">
          <div><img src="assets/img/t7.jpg"></div>
          <div>کفش تن تاک</div>
         </a>
        </div>
        <div class="col-md-3 text-center">
        <a href="#">
          <div><img src="assets/img/t1.jpg"></div>
          <div>ظروف و وسایل یکبار مصرف</div>
        </a>
        </div>
      </div>
    </div>
    
    <div class="panel panel-default panel-top-margin">
      <div class="panel-heading">تازه ترین کالاها</div>
      <div class="panel-body">سیسبسیبسیب</div>
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