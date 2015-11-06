<header>
  <div class="container">
    <div class="row">
      <div class="col-md-12"> <strong>آدرس ایمیل </strong>info@sbu.ac.ir
        &nbsp;&nbsp; </div>
    </div>
  </div>
</header>
<!-- HEADER END-->
<div class="navbar navbar-inverse set-radius-zero">
  <div class="container">
    <div class="row">
      <div class="col-md-2"> <a class="navbar-brand" href="index.php"> <img src="assets/img/digikala-logo-slogan.png" /> </a> </div>
      <div class="col-md-1 pull-left">
        <div class="left-div">
          <div class="user-settings-wrapper">
            <ul class="nav">
              <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"> <span class="glyphicon fa fa-user-plus " style="font-size: 25px;"></span> </a>
                <div class="dropdown-menu dropdown-settings pull-left text-center"> <a href="userlogin.html" class="btn btn-success btn-sm"data-toggle="modal" data-target="#myModal">ورود</a> &nbsp; <a href="resigter.php" class="btn btn-info btn-sm" >ثبت نام</a> </div>
              </li>
            </ul>
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
            <li><a href="#">تلفن همراه</a></li>
            <li><a href="show-all-laptops.php">لپتاپ</a></li>
          </ul>
        </div>
        <div class="btn-group">
          <button type="button" class="btn mybtn">درباره دیجی کالا</button>
          <button type="button" class="btn mybtn" onClick="location.href='zemanat.php'">ضمانت دیجی کالا</button>
          <button type="button" class="btn mybtn">نحوه تحویل</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--  Login Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog"> 
    
    <!-- Modal content-->
    <div class="modal-content login-modal">
      
      <div class="modal-body">
      <div style="text-align:center; margin-bottom:5%;">
      		<img src="assets/img/login-pic.jpg" style="width:35%">
      </div>
        <form role="form">
          <div class="form-group">
            <label for="email">نام کاربری</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="pwd">کلمه عبور</label>
            <input type="password" class="form-control" id="pwd">
          </div>
          
          <button type="submit" class="btn btn-success">ورود</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">بستن پنجره</button>
        </form>
      </div>
    </div>
  </div>
</div>
