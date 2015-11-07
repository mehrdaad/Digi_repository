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
    <div class="panel panel-default">
      <div class="panel-heading">فرم خرید محصول از شرکت دیجی کالا</div>
      <div class="panel-body">
      
      
      
      
      
      <form class="form-horizontal" dir = "rtl" action="bank.htm" method="post">
      <fieldset dir = "rtl">
        
        <!-- Select Basic -->
        <h4>اطلاعات خرید</h4>
        <hr>
        <div class="form-group">
          <label class="col-md-2 control-label" for="textinput">نام کاربری</label>
          <div class="col-md-3">
            <input id="textinput" name="laptop_name" type="text" placeholder="نام کاربری شما" class="form-control input-md" disabled>
          </div>
        </div>
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">لیست خرید</label>
          <div class="col-md-4" >
            <textarea class="form-control" id="textarea" name="textarea" disabled></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label" for="textinput">مجموع قیمت ها</label>
          <div class="col-md-3">
            <input id="textinput" name="laptop_name" type="text" placeholder="Operating system" class="form-control input-md" disabled>
          </div>تومان
        </div>
        
        <!-- Select Basic -->
        <br>
        <h4>اطلاعات جهت ارسال</h4>
        <hr>
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">آدرس</label>
          <div class="col-md-4" >
            <textarea class="form-control" id="textarea" name="textarea"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label" dir = "rtl" for="textinput">کد پستی</label>
          <div class="col-md-3">
            <input id="textinput" name="textinput" type="text" placeholder="10 رقم کد پستی" maxlength="11" class="form-control input-md">
          </div>
        </div>
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">شماره ملی</label>
          <div class="col-md-3">
            <input id="textinput" name="laptop_name" type="text" placeholder="شماره ملی شما" maxlength="12" class="form-control input-md">
          </div>
        </div>
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">شماره تلفن</label>
          <div class="col-md-3">
            <input id="textinput" name="laptop_name" type="text" maxlength="11" placeholder="شماره تلفن ثابت یا موبایل" class="form-control input-md">
          </div>
        </div>
        
        
        <!-- Button (Double) -->
        <div class="form-group">
          <div class="col-md-2">
            <label class="control-label" for="selectbasic"></label>
          </div>
          <div class="col-md-8">
            <button id="button1id" name="button1id" class="btn btn-success">ثبت اطلاعات خرید</button>
            <button id="button2id" name="button2id" class="btn btn-danger">لغو خرید</button>
          </div>
        </div>
      </fieldset>
    </form>
      
      
      
      
      
      </div>
    </div>



  </div>
</div>
<!-- /container -->
</div>
<!-- CONTENT-WRAPPER SECTION END-->

<?php include 'footer.php'; ?>
</body>
</html>