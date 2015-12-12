<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<body>
<?php 
$admin=false;
if($admin) include 'admin-menu.php'; 
$result=query("select * from phone where phone.id=".$_GET['id']);
$row = $result->fetch_assoc();
?>
    <!-- MENU SECTION END-->

    <div class="row">


    <div class="col-lg-12" style = "justify-content: center
    align-items: center">
        <h1 class="page-header"></h1>
    
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="assets/img/sony_1.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="<?php print $row['picture']; ?>" >
            </a>
        </div>

</div>


<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 25%">
        <div class="modal-content" style="align-item: center;">
            <div class="modal-header" >
                <button type="button" class="close"  data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title">عکس موجود برای این کالا</h4>
            </div>
            <div class="modal-body" style= "align-item: center;" >
                
                <img  id="image-gallery-image" style="width:100%;" class="img-responsive" src="<?php print $row['picture']; ?>">
               
            </div>
        </div>
    </div>
</div>
<hr>
                <div class="row col-lg-12 center-block"  >
                <div class="col-md-4">
                  <!--   Kitchen Sink -->
                    
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>سیستم عامل</td>
                                            <td style="direction:ltr;"><?php print $row['OS']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>برند گوشی</td>
                                            <td style="direction:ltr;"><?php print $row['brand']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>تعداد سیم کارت</td>
                                            <td style="direction:ltr;"><?php print $row['sim_cart']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>وزن گوشی</td>
                                            <td style="direction:ltr;"><?php print $row['weight']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>اندازه گوشی</td>
                                            <td style="direction:ltr;"><?php print $row['lcd']; ?></td>
                                        </tr>
                                         <tr>
                                            <td>6</td>
                                            <td>حافظه داخلی گوشی</td>
                                            <td style="direction:ltr;"><?php print $row['internal_ram']; ?></td>
                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td>سایر توضیحات</td>
                                            <td><?php print $row['other_explain']; ?></td>
                                        </tr>


                                    </tbody>
                                </table>
                                <div class="col-sm-6"><a href="sabad.php?action=add&from=phone&id=<?php echo $row['id']; ?>&url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"><?php if(islogin()){?><img src="assets/img/shopping.jpg" style="cursor: pointer" role="button"><?php }else{echo "<h5 style=\"color:red;\">برای خرید وارد شوید</h5>";}?></div>
                            </div>
                        </div>
                    
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
        </div>
</div>

    <!-- CONTENT-WRAPPER SECTION END-->



    <?php include 'footer.php'; ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
   
</body>
