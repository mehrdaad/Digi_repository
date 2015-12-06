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
                    <form action="<?php $_SERVER['self'] ?>" method="post">


                        <div class="panel-group">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="h4">فیلتر کردن نمایش</h4>
                                </div>
                                <div class="panel-body">
                                    <h4 class="h4">مرتب سازی بر اساس </h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="sortby">
                                            قیمت</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="sortby">
                                            تاریخ ثبت</label>
                                    </div>
                                    <div class="radio disabled">
                                        <label>
                                            <input type="radio" name="sortby">
                                            نام</label>
                                    </div>
                                    <hr>
                                    <h4 class="h4">نوع مرتب سازی</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="sort">
                                            صعودی</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="sort">
                                            نزولی</label>
                                    </div>

                                    <hr>
                                    <h4 class="h4">محدودیت قیمت</h4>
                                    <div class="form-group">
                                        <label for="email">از</label>
                                        <input type="number" placeholder="کف قیمت به ریال" class="form-control" id="kaf">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">تا</label>
                                        <input type="number" placeholder="سقف قیمت به ریال" class="form-control" id="saghf">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-9">
                    <hr>
                    <div class="row" style="text-align: center;">
                        <div id="filter-panel" class="collapse filter-panel">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form class="form-inline" role="form">
                                        <div class="form-group">
                                            <label class="filter-col" style="margin-right: 0;" for="pref-perpage">تعداد سطر های هر صفحه:</label>
                                            <select id="pref-perpage" class="form-control">
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option selected="selected" value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                            </select>
                                        </div>
                                        <!-- form group [rows] -->
                                        <div class="form-group">
                                            <label class="filter-col" style="margin-right: 0;" for="pref-search">جستجو: </label>
                                            <input type="text" class="form-control input-sm" id="pref-search">
                                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
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
                        <?php $res=query("select * from laptop"); 
                       

            if ($res->num_rows > 0) 
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
                                    <div><?php echo $row['price']; ?></div>
                                    <div class="row">
                                        <div class="col-sm-6">موجود</div>
                                        <div class="col-sm-6"><?php if(islogin()):?><img src="assets/img/shopping.jpg" style="cursor: pointer" role="button"><?php endif;?></div>
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
