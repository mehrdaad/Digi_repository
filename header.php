<?php

include("login.php");
include("controler.php");


if(isset($_POST['submit']))
$err=login();
else
$err="";
?>
<?php if(isadmin()) include('admin-menu.php'); ?>
<header>
  <div class="container">
    <div class="row">

      <div class="col-md-4"> 
      
      <strong>آدرس ایمیل </strong>info@sbu.ac.ir
      </div>
      <div class="col-md-5 <?php if(!islogin()) print "pull-left"; ?>">
        &nbsp;&nbsp;
        <form class="navbar-form navbar-left" role="search" method="post" action="search.php">
            <div class="form-group">
              <input type="text" name="search" class="form-control" placeholder="جستجو">
            </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>

      </form>
      
        &nbsp;&nbsp;
        
         </div>
         <?php if(islogin()):?>
         <div class="col-md-3" style="padding-top: 7px;">
         <form action="logout.php" method="post">
            <button class="btn btn-info pull-left" name="exit" type="submit"><i class="glyphicon glyphicon-log-out"></i> &nbsp;&nbsp;خروج&nbsp;</button>
         </form>
          <a class="btn btn-info pull-left" style="margin-left:10px;" href="profile_edit.php"><i class="glyphicon glyphicon-user"></i> &nbsp;&nbsp;ویرایش پروفایل&nbsp;
                </a>
          </div>
		 <?php endif; ?>
    </div>
  </div>
</header>
<!-- HEADER END-->

<div class="navbar navbar-inverse set-radius-zero">
  <div class="container">
    <div class="row">
      <div class="col-md-2"> <a class="navbar-brand" href="index.php"> <img src="assets/img/digikala-logo-slogan.png" /> </a> </div>
   
      <div class="col-md-6 pull-left">
        <div class="left-div">
          <div class="user-settings-wrapper">
          
             <?php if(!islogin()): ?>
            <ul class="nav">
              <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"> <span class="glyphicon fa fa-user-plus " style="font-size: 25px;"></span> </a>
                <div class="dropdown-menu dropdown-settings pull-left text-center"> <a href="userlogin.html" class="btn btn-success btn-sm"data-toggle="modal" data-target="#myModal">ورود</a> &nbsp; <a href="resigter.php" class="btn btn-info btn-sm" >ثبت نام</a> </div>
              </li>
            </ul>
            <?php else:
                      $bas=query("select * from bascket where user_id=$_SESSION[id]");
                ?>
            
           
            	<a class="btn btn-success" href="buying-form.php"><i class="glyphicon glyphicon-shopping-cart"></i> &nbsp;&nbsp; سبد خرید شما &nbsp;
                <span class="badge" style="font-size:15px;"><?php echo $bas->num_rows; ?></span></a>
                
            <?php endif; ?>
            
          </div>
        </div>
      </div>
	  
    </div>
  </div>
</div>




<div style="background-color:#FFDBDB; padding-top:5px; padding-bottom:5px;">
  <div class="container">
    <div class="row ">
      <div class="col-md-12 pull-right">
        <div class="btn-group">
          <button type="button" class="btn mybtn dropdown-toggle" data-toggle="dropdown"> کالای دیجیتال <span class="caret"></span></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="show-all-phones.php">تلفن همراه</a></li>
            <li><a href="show-all-laptops.php">لپتاپ</a></li>
          </ul>
        </div>
        <div class="btn-group">
          <button type="button" class="btn mybtn" onClick="location.href='about-digikala.php'">درباره دیجی کالا</button>
          <button type="button" class="btn mybtn" onClick="location.href='zemanat.php'">ضمانت دیجی کالا</button>
          <button type="button" class="btn mybtn" onClick="location.href='sending-methods.php'">نحوه تحویل</button>
          <button type="button" class="btn mybtn" onClick="location.href='aboutus.php'">درباره ما</button>

          <button type="button" class="btn mybtn" onClick="location.href='FAQ.php'">سوالات متداول</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php if($err!=""): ?>
<div class="container">
  <div class="alert alert-danger myalert"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
  <div><?php print $err;?></div>
  </div>
</div>
<?php endif; ?>
<!--  Login Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog"> 
    
    <!-- Modal content-->
    <div class="modal-content login-modal">
      <div class="modal-body">
        <div style="text-align:center; margin-bottom:5%;"> <img src="assets/img/login-pic.jpg" style="width:35%"> </div>
        <form role="form" action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" accept-charset="utf-8">
          <div class="form-group">
            <label for="text">نام کاربری</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="pwd">کلمه عبور</label>
            <input type="password" class="form-control" id="pwd" name="password" required>
          </div>
          <button type="submit" class="btn btn-success" name="submit">ورود</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">بستن پنجره</button>
        </form>
      </div>
    </div>
  </div>
</div>
