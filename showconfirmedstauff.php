<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<body>
<?php if(isadmin()): ?>
    <!-- MENU SECTION END-->

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">پنل مخصوص ادمین  &nbsp;  &nbsp;  ->  &nbsp;  &nbsp;  مشاهده لیست کالاهای تایید شده </h4>
                </div>
            </div>
            
            <div class="row">

<div class="table-responsive" >
                                <table class="table table-striped table-bordered table-hover" dir ="rtl">
                                    <thead>
                                        <tr>
                                            <th dir ="rtl">شماره رسید</th>
                                            <th>نام یوزر</th>
                                            <th>نام کالا</th>
                                            <th>نوع کالا</th>
                                            <th>وضعیت خرید</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                $bas_res=query("select * from bascket where 1");
                if (is_object($bas_res) && $bas_res->num_rows > 0)                                   
                                  while($brow = $bas_res->fetch_assoc())
                                  {
                                      
                                      $kala_res=query("select * from ".$brow['stuff_table']." where ".$brow['stuff_table'].".id=" . $brow['stuff_id']);
                                      $user_res=query("select * from people where people.id=".$brow['User_id']);
                                      if (is_object($user_res) && $user_res->num_rows == 1)
                                            $urow = $user_res->fetch_assoc();
                                      if (is_object($kala_res) && $kala_res->num_rows == 1):
                                            $krow = $kala_res->fetch_assoc();
                                       ?>
                                        <tr>
                                            <td><?php echo $brow['buying_id']; ?></td>
                                            <td><?php echo $urow['name']." ".$urow['fname']; ?></td>
                                            <td>
                                                <?php echo $krow['name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $brow['stuff_table']; ?>
                                            
                                            <td> <?php echo $brow['buying_state']; ?> </td>
                                            <?php 
                                          $next="";
                                          if($brow['buying_state']=="خریداری شده")
                                              $next="ارسال شده";
                                          else if($brow['buying_state']=="ارسال شده")
                                              $next="تحویل داده شده";
                                         
                                          if($next!=""):
                                            ?>
                                            <td>
                                                
                                                <a class="btn btn-danger btn-xs" onclick="return confirm('آیا از تغییر وضعیت این کالا مطمئن هستید؟');" 
                                                    href="sabad.php?url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>&action=update&id=<?php echo $brow['buying_id']; ?>&nstatus=<?php echo $next; ?>">تغییر به وضعیت <?php echo $next; ?></a>
                                                       
                                            </td>
                                            <?php endif; ?>
                                        </tr>
                                        <?php  endif; }?>
                                        
                                    </tbody>
                                </table>
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