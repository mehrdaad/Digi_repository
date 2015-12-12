<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php

if(isset($_POST['sub']))
{
    $pic="assets/img/".$_POST['picture'];
    query("INSERT INTO `cms`.`laptop` (`id`, `name`, `price`, `status`, `Date_Added`, `brand`, `OS`, `Proccessor`, `Ram`, `graphic`, `hard`, `cache`, `simcart`, `backlight`, `weight`, `lcd`, `picture`, `other_explain`) VALUES (NULL, '".$_POST['name']."', '".$_POST['price']."', 'موجود', '".date("Y/m/d")."', '".$_POST['brand']."', '".$_POST['OS']."', '".$_POST['proccessor']."', '".$_POST['ram']."', '".$_POST['graphic']."', '".$_POST['hard']."', '".$_POST['cache']."', '".$_POST['sim_cart']."', '".$_POST['back_light']."', '".$_POST['weight']."', '".$_POST['lcd']."', '".$pic."', '".$_POST['other_explain']."')");
    $err="یک لپتاپ با موفقیت اضافه شد.";
}
?>
<body>
<?php if(isadmin()):?>
<!-- MENU SECTION END-->

<div class="content-wrapper">
  <div class="container">
  
  <?php if($err!=""): ?>
            <div class="alert alert-info">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $err; ?>
            </div>
            <?php endif; ?>
  

    <form class="form-horizontal" dir = "rtl" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <fieldset dir = "rtl">
        
        <!-- Form Name -->
        <legend>فرم ثبت لپتاپ</legend>
        
        <!-- Select Basic -->
        
        <div class="form-group">
          <label class="col-md-2 control-label" for="textinput">نام لپتاپ</label>
          <div class="col-md-2">
            <input id="textinput" name="name" type="text" placeholder="نام لپتاپ" class="form-control input-md" required>
          </div>
        </div>
              
              
         <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">برند لپتاپ</label>
          <div class="col-md-2" >
            <select id="selectbasic" name="brand" class="form-control" required>
              <option value="Lenovo">Lenovo</option>
              <option value="Asus">Asus</option>
              <option value="HP">HP</option>
            </select>
          </div>
        </div>
              
                
        <div class="form-group">
          <label class="col-md-2 control-label" for="textinput">سیستم عامل</label>
          <div class="col-md-2">
            <input name="OS" type="text" placeholder="Operating system" class="form-control input-md" required>
          </div>
        </div>

        
        <!-- Select Basic -->
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">مدل و قدرت پردازنده</label>
          <div class="col-md-2">
            <input name="proccessor" type="text" placeholder="Intel Cori7" class="form-control input-md" required>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-2 control-label" dir = "rtl" for="textinput">میزان حافظه Ram</label>
          <div class="col-md-2">
            <input name="ram" type="text" placeholder="بر حسب گیگابایت" class="form-control input-md" required>
          </div>
        </div>
        
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">نوع و میزان گرافیک</label>
          <div class="col-md-2">
            <input name="graphic" type="text" placeholder="برحسب گیگابایت" class="form-control input-md" required>
          </div>
        </div>
        
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">میزان هارد</label>
          <div class="col-md-2">
            <input name="hard" type="text" placeholder="برحسب گیگابایت" class="form-control input-md" required>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-2 control-label" dir = "rtl" for="textinput">میزان حافظه cache</label>
          <div class="col-md-2">
            <input name="cache" type="text" placeholder="بر حسب مگابایت" class="form-control input-md" required>
          </div>
        </div>
        
           <div class="form-group">
          <label class="col-md-2 control-label" for="textinput">قیمت</label>
          <div class="col-md-2">
            <input name="price" type="number" placeholder="Operating system" class="form-control input-md" required>
          </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="radios">سیمکارت می خورد</label>
          <div class="col-md-4">
            <label class="radio-inline" for="radios-0">
              <input type="radio" name="sim_cart" id="radios-0" value="Yes" checked="checked">
              بله&nbsp; &nbsp; &nbsp; </label>
            <label class="radio-inline" for="radios-1">
              <input type="radio" name="sim_cart" id="radios-1" value="No">
              خیر&nbsp; &nbsp; &nbsp; </label>
          </div>
        </div>
        
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="radios">نور پس زمینه کیبورد</label>
          <div class="col-md-4">
            <label class="radio-inline" for="radios-0">
              <input type="radio" name="back_light" value="Yes" checked="checked">
              دارد&nbsp; &nbsp; &nbsp; </label>
            <label class="radio-inline" for="radios-1">
              <input type="radio" name="back_light" value="No">
              ندارد&nbsp; &nbsp; &nbsp; </label>
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="textinput">وزن لپتاپ</label>
          <div class="col-md-2">
            <input name="weight" type="text" placeholder="بر حسب کیلوگرم" class="form-control input-md" required>
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" dir = "rtl"  for="textinput">اندازه صفحه نمایشگر</label>
          <div class="col-md-2">
            <input name="lcd" type="text" placeholder="بر حسب اینچ" class="form-control input-md" required>
          </div>
        </div>
        
        <!-- Text input-->
        
        
        <!-- File Button -->
        <div class="form-group">
          <label class="col-md-2 control-label" for="filebutton">آپلود فایل تصویر لپتاپ</label>
          <div class="col-md-4">
            <input name="picture" class="input-file" type="file" required>
          </div>
        </div>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-2 control-label" for="textarea">توضیحات بیشتر</label>
          <div class="col-md-4">
            <textarea class="form-control" id="textarea" name="other_explain"></textarea>
          </div>
        </div>
        
        <!-- Button (Double) -->
        <div class="form-group">
          <div class="col-md-2">
            <label class="control-label" for="selectbasic"></label>
          </div>
          <div class="col-md-8">
            <button id="button1id" name="sub" type="submit" class="btn btn-success">ثبت اطلاعات لپتاپ</button>
            <button id="button2id" type="reset" name="button2id" class="btn btn-danger">پاک کردن اطلاعات فرم</button>
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