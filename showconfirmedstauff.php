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
                                            <th>تاریخ ثبت سفارش</th>
                                            <th>مبلغ</th>
                                            <th>وضعیت</th>
                                            <th>تاریخ ارسال محصول </th>
                                            <th>مشاهده اطلاعات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr>
                                            <td># 2501</td>
                                            <td>01/22/2015 </td>
                                            <td>
                                                300000 ریال
                                            </td>
                                            <td>
                                                <label class="label label-success">تحویل گرفته شد</label></td>
                                            <td>01/25/2015</td>
                                            <td> <a href="#"  class="btn btn-xs btn-success"  >مشاهده اطلاعات</a> </td>
                                        </tr>
                                        <tr>
                                            <td># 15091</td>
                                            <td>12/12/2014 </td>
                                            <td>
                                                300000 ریال
                                            </td>
                                            <td>
                                                <label class="label label-warning">ارسال شد</label></td>
                                            <td>هنوز فرستاده نشده</td>
                                             <td> <a href="#"  class="btn btn-xs btn-success"  >مشاهده اطلاعات</a> </td>
                                        </tr>
                                        
                                        <tr>
                                            <td># 1808</td>
                                            <td>11/10/2014 </td>
                                            <td>
                                                300000 ریال
                                            </td>
                                            <td>
                                                <label class="label label-danger">برگشت داده شد</label></td>
                                            <td>هنوز فرستاده نشده</td>
                                            <td> <a href="#"  class="btn btn-xs btn-success"  >مشاهده اطلاعات</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

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