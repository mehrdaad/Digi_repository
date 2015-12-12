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
<div class="panel panel-default panel-top-margin">
      <div class="panel-heading">کالاهایی که بیشترین خرید را داشتند</div>
      <div class="panel-body">      
      <div class="row">
          <?php $res=query("select * from laptop limit 4"); 
                              
                              if (is_object($res) && $res->num_rows == 4) 
                              {
                                  
                                  while($row = $res->fetch_assoc())
                                  {
            ?>
        <div class="col-md-3 text-center">
        <a href="show_laptop_details.php?id=<?php echo $row['id'];?>">
          <div><img src="<?php echo $row['picture'];?>"></div>
          <div class="english"><?php echo $row['name']; ?></div>
        </a>
        </div>
        
        <?php
                                      
                                      
                                  }
                              }
                              else{?>
                              <div class="alert alert-danger">  متاسفانه هیچ نتیجه ای یافت نشد.</div>
                              <?php
                              }
                              
                              ?>
     
      </div>
      
      
      
      
      
      
      </div>
    </div>

 <div class="panel panel-default panel-top-margin">
      <div class="panel-heading">جدید ترین کالاها</div>
      <div class="panel-body">
      
      <div class="row">
          <?php $res=query("select * from laptop order by Date_Added desc limit 4"); 
                              
                              if (is_object($res) && $res->num_rows == 4) 
                              {
                                  
                                  while($row = $res->fetch_assoc())
                                  {
          ?>
        <div class="col-md-3 text-center">
        <a href="show_laptop_details.php?id=<?php echo $row['id'];?>">
          <div><img src="<?php echo $row['picture'];?>"></div>
          <div class="english"><?php echo $row['name']; ?></div>
        </a>
        </div>
        
        <?php
                                      
                                      
                                  }
                              }
                              else{?>
                              <div class="alert alert-danger">  متاسفانه هیچ نتیجه ای یافت نشد.</div>
                              <?php
                              }
                              
                              ?>
        
        
      </div>
      
      </div>
    </div>


    
    <div class="panel panel-default panel-top-margin">
      <div class="panel-heading">لپتاپ های ویژه</div>
      <div class="panel-body">از آنجا که ویژه کردن یک کالا تبلیغ محسوب می شود، لذا ما کالایی را ویژه نخواهیم کرد.</div>
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