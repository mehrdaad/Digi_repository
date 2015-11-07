<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<body>
<?php if(isadmin()): ?>
<!-- MENU SECTION END-->

<div class="content-wrapper">
  <div class="container">
    <form class="form-horizontal" dir = "rtl">
      <fieldset dir = "rtl">
        
        <!-- Form Name -->
        <legend>فرم ثبت گوشی موبایل</legend>
        
        <!-- Select Basic -->
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">سیستم عامل</label>
          <div class="col-md-2" >
            <select id="selectbasic" name="selectbasic" class="form-control">
              <option value="1">اندروید</option>
              <option value="2">ای او اس</option>
            </select>
          </div>
        </div>
        
        <!-- Select Basic -->
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">برند گوشی</label>
          <div class="col-md-2" >
            <select id="selectbasic" name="selectbasic" class="form-control">
              <option value="1">سونی</option>
              <option value="2">اپل</option>
              <option value="3">هوآوی</option>
              <option value="4">ال جی</option>
              <option value="5">ایسوس</option>
              <option value="6">سامسونگ</option>
              <option value="7">نوکیا</option>
            </select>
          </div>
        </div>
        
        <!-- Multiple Radios (inline) -->
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="radios">تعداد سیم کارت</label>
          <div class="col-md-4">
            <label class="radio-inline" for="radios-0">
              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
              یک سیم کارته &nbsp; &nbsp; &nbsp; </label>
            <label class="radio-inline" for="radios-1">
              <input type="radio" name="radios" id="radios-1" value="2">
              دو سیم کارته &nbsp; &nbsp; &nbsp; </label>
            <label class="radio-inline" for="radios-2">
              <input type="radio" name="radios" id="radios-2" value="3">
              سه سیم کارته </label>
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="textinput">وزن گوشی</label>
          <div class="col-md-2">
            <input id="textinput" name="textinput" type="text" placeholder="بر حسب گرم" class="form-control input-md">
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" dir = "rtl"  for="textinput">اندازه گوشی</label>
          <div class="col-md-2">
            <input id="textinput" name="textinput" type="text" placeholder="بر حسب اینچ" class="form-control input-md">
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" dir = "rtl" for="textinput">حافظه داخلی گوشی</label>
          <div class="col-md-2">
            <input id="textinput" name="textinput" type="text" placeholder="بر حسب گیگابایت" class="form-control input-md">
          </div>
        </div>
        
        <!-- File Button -->
        <div class="form-group">
          <label class="col-md-2 control-label" for="filebutton">اضافه کردن فایل عکس مورد نظر : </label>
          <div class="col-md-4">
            <input id="filebutton" name="filebutton" class="input-file" type="file">
          </div>
        </div>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-2 control-label" for="textarea">توضیحات بیشتر : </label>
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
            <button id="button1id" name="button1id" class="btn btn-success">ثبت اطلاعات گوشی</button>
            <button id="button2id" name="button2id" class="btn btn-danger">پاک کردن اطلاعات فرم</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
<!-- /container -->
</div>
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