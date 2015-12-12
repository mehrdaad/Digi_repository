<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php

if(isset($_POST['sub']))
{
    query("INSERT INTO `cms`.`phone` (`id`, `name`, `price`, `status`, `Date_added`, `brand`, `OS`, `sim_cart`, `weight`, `lcd`, `internal_ram`, `picture`, `other_explain`) VALUES (NULL, '".$_POST['name']."', '".$_POST['price']."', '', '".date("Y/m/d")."', '".$_POST['brand']."', '".$_POST['OS']."', '".$_POST['sim_cart']."', '".$_POST['weight']."', '".$_POST['lcd']."', '".$_POST['internal_ram']."', '".$_POST['picture']."', '".$_POST['other_explain']."')");
    $err="یک گوشی با موفقیت اضافه شد.";
}
    ?>
<body>







    <?php if(isadmin()): ?>
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
                <fieldset dir="rtl">

                    <!-- Form Name -->
                    <legend>فرم ثبت گوشی موبایل</legend>

                    <!-- Select Basic -->

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">نام گوشی</label>
                        <div class="col-md-2">
                            <input name="name" type="text" placeholder="نام کامل" class="form-control input-md" required>
                        </div>
                    </div>


                    <div class="form-group" dir="rtl">
                        <label class="col-md-2 control-label" for="selectbasic">سیستم عامل</label>
                        <div class="col-md-2">
                            <select name="OS" class="form-control" required>
                                <option value="اندروید">اندروید</option>
                                <option value="ای او اس">ای او اس</option>
                            </select>
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group" dir="rtl">
                        <label class="col-md-2 control-label" for="selectbasic">برند گوشی</label>
                        <div class="col-md-2">
                            <select name="brand" class="form-control" required>
                                <option value="سونی">سونی</option>
                                <option value="اپل">اپل</option>
                                <option value="هوآوی">هوآوی</option>
                                <option value="ال جی">ال جی</option>
                                <option value="ایسوس">ایسوس</option>
                                <option value="سامسونگ">سامسونگ</option>
                                <option value="نوکیا">نوکیا</option>
                            </select>
                        </div>
                    </div>

                    <!-- Multiple Radios (inline) -->
                    <div class="form-group" dir="rtl">
                        <label class="col-md-2 control-label" for="radios">تعداد سیم کارت</label>
                        <div class="col-md-4">
                            <label class="radio-inline" for="radios-0">
                                <input type="radio" name="sim_cart" id="radios-0" value="1" checked="checked">
                                یک سیم کارته &nbsp; &nbsp; &nbsp;
                            </label>
                            <label class="radio-inline" for="radios-1">
                                <input type="radio" name="sim_cart" id="radios-1" value="2">
                                دو سیم کارته &nbsp; &nbsp; &nbsp;
                            </label>
                            <label class="radio-inline" for="radios-2">
                                <input type="radio" name="sim_cart" id="radios-2" value="3">
                                سه سیم کارته
                            </label>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">وزن گوشی</label>
                        <div class="col-md-2">
                            <input name="weight" type="text" placeholder="بر حسب گرم" class="form-control input-md" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">قیمت</label>
                        <div class="col-md-2">
                            <input name="price" type="number" placeholder="بر حسب ریال" class="form-control input-md" required>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" dir="rtl" for="textinput">اندازه گوشی</label>
                        <div class="col-md-2">
                            <input name="lcd" type="text" placeholder="بر حسب اینچ" class="form-control input-md" required>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" dir="rtl" for="textinput">حافظه داخلی گوشی</label>
                        <div class="col-md-2">
                            <input name="internal_ram" type="text" placeholder="بر حسب گیگابایت" class="form-control input-md" required>
                        </div>
                    </div>


                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="filebutton">اضافه کردن فایل عکس مورد نظر : </label>
                        <div class="col-md-4">
                            <input name="picture" class="input-file" type="file" required>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textarea">توضیحات بیشتر : </label>
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
                            <button id="button1id" name="sub" class="btn btn-success">ثبت اطلاعات گوشی</button>
                            <button id="button2id" class="btn btn-danger">پاک کردن اطلاعات فرم</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <!-- CONTENT-WRAPPER SECTION END-->

    <?php include 'footer.php'; ?>
    <?php else: ?>
    <div class="container">
        <div class="alert alert-danger fade in myalert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <h1>شما حق دسترسی به این صفحه را ندارید. </h1>
            <a href="index.php">
                <h4>بازگشت به صفحه اصلی</h4>
            </a>
        </div>
    </div>
    <?php endif; ?>
</body>
</html>