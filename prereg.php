<!DOCTYPE html>
<html lang="en">

<head>
<?php include ('includes/head.php');?>
</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
		<?php include ('includes/header.php');?>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/bread_cumb.jpg);">
        <div class="bradcumbContent">
            <h2>Student Dashbroad</h2>
        </div>
    </div>
    <br><br><br><br>
    <!-- ##### Breadcumb Area End ##### -->
    
    <!-- Course Registeration Area Strat.-->
   	
				<!-- Course Registeration.-->
                 <div class="col-12">
                    <div class="elements-title mb-50" style="text-align:center">
                        <h2>zaarab001@gmail.com</h2>
                         <span>Please Upload your Picture.</span>
                    </div>
                </div>
                 <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel single-accordion" style="margin-left:170px; margin-right:170px">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><h6><strong>NOTE: your picture must be less than 300kb.</strong></h6>
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapseOne" class="accordion-content collapse show" style="margin-left:200px">
                            <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE?>">
                            <input id="image" name="image" required type="file">&nbsp;
                            <!--<button type="submit" class="btn academy-btn m-2" name="add"><i class="fa fa-user-plus"></i> Upload Passport</button>-->
                            <a href="profile.php" class="btn academy-btn m-2"><i class="fa fa-user-plus"></i> Upload Passport</a>
                                                       </form>
                             
                            </div>
                       	</div>
                        </div><br><br>
                       

	
    <!-- Course Registeration End.-->
   
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
		<?php include ('includes/footer.php');?>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>