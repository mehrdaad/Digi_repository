<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<body>
<?php 
$admin=false;
if($admin) include 'admin-menu.php'; 
$result=query("select * from laptop where laptop.id=".$_GET['id']);
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
                <h4 class="modal-title" id="image-gallery-title">عکس های موجود برای این کالا</h4>
            </div>
            <div class="modal-body" style= "text-align: center;" >
                
                <img  style="width:100%"; id="image-gallery-image" class="img-responsive" src="<?php print $row['picture']; ?>">
               
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
                                            <td>نام لپتاپ</td>
                                            <td style="direction:ltr;"><?php print $row['name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>برند لپتاپ</td>
                                            <td style="direction:ltr;"><?php print $row['brand']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>سیستم عامل</td>
                                            <td style="direction:ltr;"><?php print $row['OS']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>مدل و قدرت پردازنده</td>
                                            <td style="direction:ltr;"><?php print $row['Proccessor']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>میزان حافظه Ram</td>
                                            <td style="direction:ltr;"><?php print $row['Ram']; ?></td>
                                        </tr>
                                         <tr>
                                            <td>6</td>
                                            <td>نوع و میزان گرافیک</td>
                                            <td style="direction:ltr;"><?php print $row['graphic']; ?></td>
                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td>میزان هارد</td>
                                            <td style="direction:ltr;"><?php print $row['hard']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>میزان حافظه cache</td>
                                            <td style="direction:ltr;"><?php print $row['cache']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>سیمکارت می خورد</td>
                                            <td style="direction:ltr;"><?php print $row['simcart']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>نور پس زمینه کیبورد</td>
                                            <td style="direction:ltr;"><?php print $row['backlight']; ?></td>
                                        </tr>

                                        <tr>
                                            <td>11</td>
                                            <td>وزن لپتاپ</td>
                                            <td style="direction:ltr;"><?php print $row['weight']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>اندازه صفحه نمایشگر</td>
                                            <td style="direction:ltr;"><?php print $row['lcd']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>توضیحات</td>
                                            <td style="direction:rtl;"><?php print $row['other_explain']; ?></td>
                                        </tr>


                                    </tbody>
                                </table>
                                <div class="col-sm-6"><a href="sabad.php?action=add&from=laptop&id=<?php echo $row['id']; ?>&url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"><?php if(islogin()){?><img src="assets/img/shopping.jpg" style="cursor: pointer" role="button"><?php }else{echo "<h5 style=\"color:red;\">برای خرید وارد شوید</h5>";}?></div>
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
