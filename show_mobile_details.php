<!DOCTYPE html>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<script>
$(document).ready(function(){

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                if (current_image == 1) {
                    current_image = 3;
                }
                else
                current_image--;
            } else {
                if (current_image == 3) {
                    current_image = 1;
                }
                else
                    current_image ++;
                
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});
</script>

<body>
<?php 
$admin=false;
if($admin)include 'admin-menu.php'; ?>
    <!-- MENU SECTION END-->

    <div class="row">


    <div class="col-lg-12" style = "justify-content: center
    align-items: center">
        <h1 class="page-header"></h1>
    
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="assets/img/sony_1.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="assets/img/sony_1.jpg" >
            </a>
        </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-image="assets/img/sony_2.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="assets/img/sony_2.jpg" >
            </a>
        </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb" >
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-image="assets/img/sony_3.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="assets/img/sony_3.jpg ">
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
            <div class="modal-body" style= "align-item: center;" >
                
                <img  id="image-gallery-image" class="img-responsive" src="assets/img/sony_1.jpg">
               
            </div>

            <div class="modal-footer" style="text-align: center;">

                <div class="col-md-6">
                    <button type="button" class="btn btn-primary" id="show-previous-image">عکس قبلی</button>
                </div>


                <div class="col-md-6">
                    <button type="button" id="show-next-image" class="btn btn-default">عکس بعدی</button>
                </div>
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
                                            <td>اندروید</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>برند گوشی</td>
                                            <td>سونی</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>تعداد سیم کارت</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>وزن گوشی</td>
                                            <td>...</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>اندازه گوشی</td>
                                            <td>...</td>
                                        </tr>
                                         <tr>
                                            <td>6</td>
                                            <td>حافظه داخلی گوشی</td>
                                            <td>...</td>
                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td>سایر توضیحات</td>
                                            <td>...</td>
                                        </tr>


                                    </tbody>
                                </table>
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
</html>