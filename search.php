<?php
if(isset($_POST['search']))
    $qry="select * from laptop where name like '%".$_POST['search']."%'";
    else $qry="select * from laptop where 1";

    if(isset($_POST['kaf']) && $_POST['kaf']!="")
        $qry.=" and price>".$_POST['kaf'];

    if(isset($_POST['saghf']) && $_POST['saghf']!="")
        $qry.=" and price<".$_POST['saghf'];

    if(isset($_POST['sortby']) && $_POST['sortby']!="")
        $qry.=" order by ".$_POST['sortby'];

    if(isset($_POST['sort']) && $_POST['sort']!="")
        $qry.=" ".$_POST['sort'];
    

if(isset($_POST['search']))
        $nqry="select * from phone where name like '%".$_POST['search']."%'";
    else $nqry="select * from phone where 1";

    if(isset($_POST['kaf']) && $_POST['kaf']!="")
        $nqry.=" and price>".$_POST['kaf'];

    if(isset($_POST['saghf']) && $_POST['saghf']!="")
        $nqry.=" and price<".$_POST['saghf'];

    if(isset($_POST['sortby']) && $_POST['sortby']!="")
        $nqry.=" order by ".$_POST['sortby'];

    if(isset($_POST['sort']) && $_POST['sort']!="")
        $nqry.=" ".$_POST['sort'];
    ?>

<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<body>
    <?php 
    $admin=false;
    if($admin)include 'admin-menu.php'; ?>
    <!-- MENU SECTION END-->

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


                        <div class="panel-group">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="h4">فیلتر کردن نمایش</h4>
                                </div>
                                <div class="panel-body">
                                    <h4 class="h4">مرتب سازی بر اساس </h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="sortby" value="price">
                                            قیمت</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="sortby" value="date_added">
                                            تاریخ ثبت</label>
                                    </div>
                                    <div class="radio disabled">
                                        <label>
                                            <input type="radio" name="sortby" value="name">
                                            نام</label>
                                    </div>
                                    <hr>
                                    <h4 class="h4">نوع مرتب سازی</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="sort" value="asc">
                                            صعودی</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="sort" value="desc">
                                            نزولی</label>
                                    </div>

                                    <hr>
                                    <h4 class="h4">محدودیت قیمت</h4>
                                    <div class="form-group">
                                        <label for="email">از</label>
                                        <input type="number" placeholder="کف قیمت به ریال" class="form-control" name="kaf">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">تا</label>
                                        <input type="number" placeholder="سقف قیمت به ریال" class="form-control" name="saghf">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden"  class="btn btn-success" value="<?php if(isset($_POST['advance_search'])) echo $_POST['advance_search']; ?>" name="advance_search">
                                        <input type="submit"  class="btn btn-success" value="اعمال فیلتر" style="width:100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-9">


                    <div class="row">
                        <?php $res=query($qry); 
                              
                              if (is_object($res) && $res->num_rows > 0) 
                              {
                                  
                                  while($row = $res->fetch_assoc())
                                  {
                        ?>
                        <div class="col-md-4">
                            <div class="bordered" style="padding-bottom: 10px;">

                                <div style="text-align: center !important">
                                    <a href="show_laptop_details.php?id=<?php echo $row['id'];?>">
                                        <img src="<?php echo $row['picture'];?>"></a>
                                </div>
                                <div style="text-align: center; font-family: caption !important;">
                                    <div><?php echo $row['name']; ?></div>
                                    <div>قیمت : <?php echo $row['price']; ?> ریال</div>
                                    <div class="row">
                                        <div class="col-sm-6"><?php echo $row['status']; ?></div>
                                        <div class="col-sm-6"><a href="sabad.php?action=add&from=laptop&id=<?php echo $row['id']; ?>&url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"><?php if(islogin()){?><img src="assets/img/shopping.jpg" style="cursor: pointer" role="button"><?php }else{echo "<h5 style=\"color:red;\">برای خرید وارد شوید</h5>";}?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                                                    
                                                                    
                                  }
                              }
                              
                                 
                        ?>
                   
                    
                        <?php $res=query($nqry); 
                              
                              if (is_object($res) && $res->num_rows > 0) 
                              {
                                  
                                  while($row = $res->fetch_assoc())
                                  {
                        ?>
                        <div class="col-md-4">
                            <div class="bordered" style="padding-bottom: 10px;">

                                <div style="text-align: center !important">
                                    <a href="show_mobile_details.php?id=<?php echo $row['id'];?>">
                                        <img src="<?php echo $row['picture'];?>"></a>
                                </div>
                                <div style="text-align: center; font-family: caption !important;">
                                    <div><?php echo $row['name']; ?></div>
                                    <div>قیمت : <?php echo $row['price']; ?> ریال</div>
                                    <div class="row">
                                        <div class="col-sm-6"><?php echo $row['status']; ?></div>
                                        <div class="col-sm-6"><a href="sabad.php?action=add&from=phone&id=<?php echo $row['id']; ?>&url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"><?php if(islogin()){?><img src="assets/img/shopping.jpg" style="cursor: pointer" role="button"><?php }else{echo "<h5 style=\"color:red;\">برای خرید وارد شوید</h5>";}?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                                                                                                                                                                                                
                                                                                                                                                                                                                
                                  }
                              }
                        ?>
                       
                     </div>

                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>