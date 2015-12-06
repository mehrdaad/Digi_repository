<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<body>
<?php if(isadmin()):?>
<!-- MENU SECTION END-->

<div class="content-wrapper">
  <div class="container">
  
  
  

    <form class="form-horizontal" dir = "rtl">
      <fieldset dir = "rtl">
        
        <!-- Form Name -->
        <legend>فرم ثبت لپتاپ</legend>
        
        <!-- Select Basic -->
        
        <div class="form-group">
          <label class="col-md-2 control-label" for="textinput">نام لپتاپ</label>
          <div class="col-md-2">
            <input id="textinput" name="laptop_name" type="text" placeholder="نام لپتاپ" class="form-control input-md">
          </div>
        </div>
              
              
         <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">برند لپتاپ</label>
          <div class="col-md-2" >
            <select id="selectbasic" name="selectbasic" class="form-control">
              <option value="1">Lenovo</option>
              <option value="2">Asus</option>
              <option value="3">HP</option>
            </select>
          </div>
        </div>
              
                
        <div class="form-group">
          <label class="col-md-2 control-label" for="textinput">سیستم عامل</label>
          <div class="col-md-2">
            <input id="textinput" name="laptop_name" type="text" placeholder="Operating system" class="form-control input-md">
          </div>
        </div>

        
        <!-- Select Basic -->
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">مدل و قدرت پردازنده</label>
          <div class="col-md-2">
            <input id="textinput" name="laptop_name" type="text" placeholder="Intel Cori7" class="form-control input-md">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-2 control-label" dir = "rtl" for="textinput">میزان حافظه Ram</label>
          <div class="col-md-2">
            <input id="textinput" name="textinput" type="text" placeholder="بر حسب گیگابایت" class="form-control input-md">
          </div>
        </div>
        
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">نوع و میزان گرافیک</label>
          <div class="col-md-2">
            <input id="textinput" name="laptop_name" type="text" placeholder="برحسب گیگابایت" class="form-control input-md">
          </div>
        </div>
        
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">میزان هارد</label>
          <div class="col-md-2">
            <input id="textinput" name="laptop_name" type="text" placeholder="برحسب گیگابایت" class="form-control input-md">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-2 control-label" dir = "rtl" for="textinput">میزان حافظه cache</label>
          <div class="col-md-2">
            <input id="textinput" name="textinput" type="text" placeholder="بر حسب مگابایت" class="form-control input-md">
          </div>
        </div>
        
        <!-- Multiple Radios (inline) -->
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="radios">سیمکارت می خورد</label>
          <div class="col-md-4">
            <label class="radio-inline" for="radios-0">
              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
              بله&nbsp; &nbsp; &nbsp; </label>
            <label class="radio-inline" for="radios-1">
              <input type="radio" name="radios" id="radios-1" value="2">
              خیر&nbsp; &nbsp; &nbsp; </label>
          </div>
        </div>
        
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="radios">نور پس زمینه کیبورد</label>
          <div class="col-md-4">
            <label class="radio-inline" for="radios-0">
              <input type="radio" name="backlight" id="radios-0" value="1" checked="checked">
              دارد&nbsp; &nbsp; &nbsp; </label>
            <label class="radio-inline" for="radios-1">
              <input type="radio" name="backlight" id="radios-1" value="2">
              ندارد&nbsp; &nbsp; &nbsp; </label>
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="textinput">وزن لپتاپ</label>
          <div class="col-md-2">
            <input id="textinput" name="textinput" type="text" placeholder="بر حسب کیلوگرم" class="form-control input-md">
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" dir = "rtl"  for="textinput">اندازه صفحه نمایشگر</label>
          <div class="col-md-2">
            <input id="textinput" name="textinput" type="text" placeholder="بر حسب اینچ" class="form-control input-md">
          </div>
        </div>
        
        <!-- Text input-->
        
        
        <!-- File Button -->
        <div class="form-group">
          <label class="col-md-2 control-label" for="filebutton">آپلود فایل تصویر لپتاپ</label>
          <div class="col-md-4">
            <input id="filebutton" name="filebutton" class="input-file" type="file">
          </div>
        </div>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-2 control-label" for="textarea">توضیحات بیشتر</label>
          <div class="col-md-4">
            <textarea class="form-control" id="textarea" name="textarea"></textarea>
          </div>
        </div>
        
        <!-- Button (Double) -->
        <div class="form-group">
          <div class="col-md-2">
            <label class="control-label" for="selectbasic"></label>
          </div>
          <div class="col-md-8">
            <button id="button1id" name="button1id" class="btn btn-success">ثبت اطلاعات لپتاپ</button>
            <button id="button2id" name="button2id" class="btn btn-danger">پاک کردن اطلاعات فرم</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
<!-- /container -->
<!-- CONTENT-WRAPPER SECTION END-->

<?php include 'footer.php'; ?>

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