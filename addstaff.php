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
  
  
  <div class="container">
    <div class="row stylish-panel">
            <div class="col-md-6">
                <div onClick="location.href='addmobile.php'">
                    
                    <img src="assets/img/addphone.jpg?q=tbn:ANd9GcS9-2ilXklRuD6qYIgQ96vMUDXEM-7uc_XKgz3lzLwqw_10AGsBRg" alt="Texto Alternativo" class="img-circle img-thumbnail">
                    <h2>اضافه کردن گوشی موبایل</h2>
                
                </div>
            </div>
        


      <div class="col-md-6">
        <div onClick="location.href='addlaptop.php'">
          <img src="assets/img/addlaptop.jpg?q=tbn:ANd9GcS5Sh9oxwHw2lNDgOpqNkeQdbRsFYkAWrR_0Fu6qoBdswe-X3a26g" alt="Texto Alternativo" class="img-circle img-thumbnail">
          <h2>اضافه کردن لپتاپ</h2>
        </div>
      </div>

      
      
      
    </div>
    </div>
  </div>
</div>
<!-- /container -->
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->



    <?php include 'footer.php'; ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    
</body>
</html>