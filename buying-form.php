<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; $price_sum=0;?>

<body>
<!-- MENU SECTION END-->

<div class="content-wrapper">
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">فرم خرید محصول از شرکت دیجی کالا</div>
      <div class="panel-body">
      
      <?php if(islogin()):?>
      
      
      
      <form class="form-horizontal" dir = "rtl" action="sabad.php" method="post">

        
        <!-- Select Basic -->
        <h4>اطلاعات خرید</h4>
        <hr>
        <div class="form-group">
          <label class="col-md-2 control-label" for="textinput">نام کاربری</label>
          <div class="col-md-3">
            <input name="username" type="text" placeholder="نام کاربری شما" class="form-control input-md" readonly="readonly" value="<?php echo $_SESSION['username']; ?>">
            <input name="user_id" type="hidden" placeholder="نام کاربری شما" class="form-control input-md" readonly="readonly" value="<?php echo $_SESSION['id']; ?>">
          </div>
        </div>
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">لیست خرید</label>
          <div class="col-md-10" >
            <div class="table-responsive" >
                                <table class="table table-striped table-bordered table-hover" dir ="rtl">
                                    <thead>
                                        <tr>
                                            <th dir ="rtl">شماره رسید</th>
                                            <th>نام کالا</th>
                                             <th>نوع کالا</th>
                                            <th>قیمت کالا</th>
                                            <th>وضعیت</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                $bas_res=query("select * from bascket where user_id=$_SESSION[id]");
                if (is_object($bas_res) && $bas_res->num_rows > 0)                                   
                                  while($brow = $bas_res->fetch_assoc())
                                  {
                                      
                                      $kala=query("select * from ".$brow['stuff_table']." where ".$brow['stuff_table'].".id=" . $brow['stuff_id']);
                                        if (is_object($kala) && $kala->num_rows > 0):
                                            $krow = $kala->fetch_assoc()
                                       ?>
                                        <tr>
                                            <td><?php echo $brow['buying_id']; ?></td>
                                            <td><?php echo $krow['name']; ?> </td>
                                            <td><?php echo $brow['stuff_table']; ?></td>
                                            <td>
                                                <?php echo $krow['price']; 
                                                     if($brow['buying_state']=="در سبد خرید")
                                                      $price_sum+=$krow['price'];?>
                                            </td>
                                            <td>
                                                <label class="label label-success"><?php echo $brow['buying_state']; ?></label></td>
                                            <td>
                                                <?php if($brow['buying_state']=="در سبد خرید"){ ?>
                                                <a onclick="return confirm('آیا از حذف این کالا مطمئن هستید؟');" class="btn btn-danger btn-sm" href="sabad.php?url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>&action=delete&id=<?php echo $brow['buying_id']; ?> ">حذف از سبد خرید</a>  </td>
                                            <?php } ?>
                                            
                                        </tr>
                                        <?php endif;
                                                 } 
                                        ?> 
                                    </tbody>
                                </table>
                            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label" for="textinput">مجموع قیمت ها</label>
          <div class="col-md-3">
            <input name="sum_price" type="text" placeholder="Operating system" class="form-control input-md" readonly="readonly" value="<?php echo $price_sum; ?>">
          </div>ریال
        </div>
        
        <!-- Select Basic -->
        <br>
        <h4>اطلاعات جهت ارسال</h4>
        <hr>
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">آدرس</label>
          <div class="col-md-4" >
            <textarea class="form-control" id="textarea" name="address" required></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label" dir = "rtl" for="textinput" >کد پستی</label>
          <div class="col-md-3">
            <input id="textinput" name="postal_code" type="text" placeholder="10 رقم کد پستی" maxlength="11" class="form-control input-md" required>
          </div>
        </div>
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">شماره ملی</label>
          <div class="col-md-3">
            <input id="textinput" name="shm" type="text" placeholder="شماره ملی شما" maxlength="12" class="form-control input-md" required>
          </div>
        </div>
        <div class="form-group" dir = "rtl">
          <label class="col-md-2 control-label" for="selectbasic">شماره تلفن</label>
          <div class="col-md-3">
            <input id="textinput" name="telephone" type="text" maxlength="11" placeholder="شماره تلفن ثابت یا موبایل" class="form-control input-md" required>
          </div>
        </div>
        
        
        <!-- Button (Double) -->
        <div class="form-group">
          <div class="col-md-2">
            <label class="control-label" for="selectbasic"></label>
          </div>
          <div class="col-md-8">
            <button type="submit" name="sub" class="btn btn-success">ثبت اطلاعات خرید</button>
            <button name="button2id" type="reset" onClick="location.href='index.php'" class="btn btn-danger">لغو خرید</button>
          </div>
        </div>
      </fieldset>
    </form>
      <?php else: ?>
          <div class="container">
  <div class="alert alert-danger fade in myalert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <h1> شما حق دسترسی به این صفحه را ندارید. </h1>
    <a href="index.php"><h4>بازگشت به صفحه اصلی</h4></a>
  </div>
</div>
<?php endif; ?>
      
      
      
      
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