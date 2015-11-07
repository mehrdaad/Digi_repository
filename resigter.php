<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<head>
<style>
      .colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
    </style>
 <script>
  window.console = window.console || function(t) {};
</script>
<script type="text/javascript">

</script></head>
<body>
<?php 
$admin=false;
if($admin)include 'admin-menu.php'; ?>
<!-- MENU SECTION END-->

            <div class="container">

<div class="row" dir = "rtl">
    <div class="col-xs-12 col-sm-8 col-md-6">
        <form role="form">
          <h2>فرم ثبت نام <small>لطفا برای پیوستن به کاربران این سایت، ثبت نام کنید</small></h2>
          <hr class="colorgraph">
          <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="نام خانوادگی " tabindex="2">
              </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="نام " tabindex="1">
              </div>
          </div>
        
      </div>
      <div class="form-group">
        <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="نام کاربری" tabindex="3">
      </div>
      <div class="form-group">
        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="آدرس ایمیل" tabindex="4">
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="مجددا پسورد خود را وارد نمایید" tabindex="6">
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="پسورد" tabindex="5">
          </div>
        </div>
        
      </div>
      <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
          
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9">
           کلیک بر روی دکمه  <strong class="label label-primary">ثبت نام</strong>، به منزله پذیرفتن <a href="#"  data-target="#t_and_c_m">قوانین سایت</a> میباشد.
        </div>
      </div>
      
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-6 col-md-6 col-sm-offset-2 col-md-offset-3"><input type="submit" value="ثبت نام" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>

        
      </div>
    </form>
    <hr >
  </div>
</div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>