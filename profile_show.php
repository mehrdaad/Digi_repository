<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<body>
<?php if(isadmin()):?>
    <!-- MENU SECTION END-->

    <div class="content-wrapper">
<div class="container">
  <div class="row">
    <div class="col-md-6">
    
      <div class="panel panel-default">
      <div class="panel-body">
                  <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <h2>شیرین طهماسبی</h2>
                            <p><strong>آدرس ایمیل: </strong> tahmasebi_shirin@yahoo.com </p>
                            
                        </div><!--/col-->          
                        <div class="col-xs-12 col-sm-4 text-center">
                                <img src="assets/img/avatar.png" alt="" class="center-block img-circle img-responsive">
                                
                        </div><!--/col-->

                        
                  </div><!--/row-->

                  <div class="form-group">
    <div class="col-md-2">
        <label class="control-label" for="selectbasic"></label>
    </div>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success"  onClick="location.href='profile_edit.php'">ویرایش اطلاعات</button>
    <button id="button2id" name="button2id" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm">تغییر رمز عبور</button>
  </div>

              </div><!--/panel-body-->
<!-- Button (Double) -->

</div>
          </div><!--/panel-->

    
    
    </div>
  </div>
</div>

</div>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">تغییر رمز عبور</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">رمز عبور پیشین:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">رمز عبور جدید:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">اعمال تغییرات</button>
      </div>
    </div>
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
    <h1> شما حق دسترسی به این صفحه را ندارید. </h1>
    <a href="index.php"><h4>بازگشت به صفحه اصلی</h4></a>
  </div>
</div>
<?php endif; ?>
   
</body>
</html>