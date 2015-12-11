<?php
if(isset($_POST['advance_search']))
        $qry="select * from laptop where name like '%".$_POST['advance_search']."%' or price like '%".
        $_POST['advance_search']."%' or brand like '%".
        $_POST['advance_search']."%' or OS like '%".
        $_POST['advance_search']."%' or proccessor like '%".
        $_POST['advance_search']."%' or Ram like '%".
        $_POST['advance_search']."%' or graphic like '%".$_POST['advance_search']."%' or hard like '%".
        $_POST['advance_search']."%' or cache like '%".$_POST['advance_search']."%' or other_explain like '%".
        $_POST['advance_search']."%'";
    else $qry="select * from laptop where 1";

    if(isset($_POST['kaf']) && $_POST['kaf']!="")
        $qry.=" and price>".$_POST['kaf'];

    if(isset($_POST['saghf']) && $_POST['saghf']!="")
        $qry.=" and price<".$_POST['saghf'];

    if(isset($_POST['sortby']) && $_POST['sortby']!="")
        $qry.=" order by ".$_POST['sortby'];

    if(isset($_POST['sort']) && $_POST['sort']!="")
        $qry.=" ".$_POST['sort'];
    echo $qry;
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
                    <?php if(isset($_POST['advance_search'])){  ?>
                    <hr />
                    <div class="alert alert-info">
                        نتایج جستجو برای عبارت "<strong><?php print $_POST['advance_search']; ?>"</strong>
                    </div>
                    <?php } ?>
                    <hr>
                    <div class="row" style="text-align: center;">
                        <div id="filter-panel" class="collapse filter-panel">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form class="form-inline" role="form" action="<?php echo $_SERVER['PHP_SELF']."?page=search"; ?>" method="post">
                                        <div class="form-group">
                                            تفاوت جستجوی پیشرفته با جستجوی معمولی این است که جستجوی پیشرفته در همه ی عبارات و فیلدهای سایت جستجو انجام می دهد ولی جستجوی معمولی تنها بر اساس نام است.
                                        </div>
                                        <!-- form group [rows] -->
                                        <div class="form-group">
                                            <label class="filter-col" style="margin-right: 0;" for="pref-search">جستجو پیشرفته: </label>
                                            <input type="text" class="form-control input-sm" name="advance_search">
                                            <button name="adv_btn" value="adv_search" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary " data-toggle="collapse" data-target="#filter-panel">
                            <span class="glyphicon glyphicon-cog"></span>جستجو پیشرفته
                        </button>
                    </div>
                    <hr />


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
                                        <div class="col-sm-6"><?php if(islogin()){?><img src="assets/img/shopping.jpg" style="cursor: pointer" role="button"><?php }else{echo "<h5 style=\"color:red;\">برای خرید وارد شوید</h5>";}?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                                                    
                                                                    
                                  }
                              }
                              else{?>
                              <div class="alert alert-danger">  متاسفانه هیچ نتیجه ای یافت نشد.</div>
                              <?php
                              }
                                 
                        ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>