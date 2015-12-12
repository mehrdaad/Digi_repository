<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php
    if(isset($_POST['sub']))
    {
        $err="اطلاعات شما با موفقیت بروز شد.";
        
        query("UPDATE cms.`people` SET `name`='".$_POST['name']."',`fname`='".$_POST['fname']."',`email`='".$_POST['email']."' WHERE id='".$_SESSION['id']."'");
        $_SESSION['name']=$_POST['name'];
        $_SESSION['fname']=$_POST['fname'];
        $_SESSION['email']=$_POST['email'];
        if($_POST['cpsw']==$_SESSION['password'] && $_POST['npsw']==$_POST['rnpsw'] && $_POST['cpsw']!="" && $_POST['npsw']!="")
        {
            query("UPDATE cms.`people` SET `password`='".$_POST['npsw']."' WHERE id='".$_SESSION['id']."'");
            $_SESSION['password']=$_POST['npsw'];
        }
        else
            $err.="<br>بروز رسانی اطلاعات امنیتی با مشکل مواجه شد";
    }
    ?>
<body>
    <?php if(islogin()):?>
    <!-- MENU SECTION END-->

    <div class="content-wrapper">
        <div class="container">

            <?php if($err!=""): ?>
            <div class="alert alert-info">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $err; ?>
            </div>
            <?php endif; ?>

            <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="post" >
                <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <hr />
                            <h4 class="text-center"><strong>اطلاعات شخصی </strong></h4>

                            <hr />
                            <h5 class="text-center">ویرایش اطلاعات</h5>

                            <p>
                                <strong>نام : </strong>
                                <input type="text" class="form-control" name="name" value="<?php print $_SESSION['name']; ?>" required/>
                            </p>
                            <p>
                                <strong>نام خانوادگی : </strong>
                                <input type="text" class="form-control" name="fname" value="<?php print $_SESSION['fname']; ?>" required/>
                            </p>
                            <p>
                                <strong>آدرس ایمیل: </strong>
                                <input type="text" class="form-control" name="email" value="<?php print $_SESSION['email']; ?>"  />
                            </p>

                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label" for="selectbasic"></label>
                                </div>


                            </div>
                            <!--/panel-body-->
                            <!-- Button (Double) -->

                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="panel panel-default">
                        <div class="panel-body">

                            <hr />
                            <h4 class="text-center"><strong>اطلاعات امنیتی </strong></h4>

                            <hr />
                            <h5 class="text-center">تغییر رمز عبور</h5>
                            <p>
                                <strong>رمز عبور فعلی : </strong>
                                <input type="password" class="form-control" name="cpsw"  placeholder="رمز عبور فعلی"/>
                            </p>
                            <p>
                                <strong>رمز جدید</strong>
                                <input type="password" class="form-control" name="npsw" placeholder="رمز عبور جدید"/>
                            </p>
                            <p>
                                <strong>تکرار رمز:</strong>
                                <input type="password" name="rnpsw" class="form-control"  placeholder="تکرار رمز عبور جدید" />
                            </p>

                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label" for="selectbasic"></label>
                                </div>


                            </div>

                            <!--/panel-body-->
                            <!-- Button (Double) -->

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button id="button1id" name="sub" type="submit" class="btn btn-success">ویرایش</button>
                <a id="button2id"  class="btn btn-danger" href="index.php">بازگشت</a>
            </div>
            </form>
            
        </div>

    </div>


    <!-- CONTENT-WRAPPER SECTION END-->



    <?php include 'footer.php'; ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
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
