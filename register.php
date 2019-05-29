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
            <h2>Registeration Page</h2>
        </div>
    </div><br><br><br>
    <!-- ##### Breadcumb Area End ##### -->
	
			  <!-- Start Registeration area -->
                <div class="col-12">
                    <div class="elements-title mb-50" style="text-align:center">
                        <h2>Student Application Form</h2>
                         <span>Please enter your information clearly in the boxes below in English.</span>
                    </div>
                </div>

                <!-- ##### Forms ##### -->
                <div class="col-9 col-lg-9" style="margin-left:170px">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><h6><strong>Student Bio Data.</strong></h6>
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show" style="margin-left:100px"><br>
                            <p><em>Please enter your information clearly in the boxes below in English.</em></p>
                              <form class="form-horizontal well" method="post" action="#">
                              <div class="col-md-6">
                                  <label for="title"><strong>Title:</strong></label>&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="title" value="Mr"> Mr.&nbsp;&nbsp;
                                    <input type="radio" name="title" value="Mrs"> Mrs.&nbsp;&nbsp;
                                    <input type="radio" name="title" value="Miss"> Miss.&nbsp;&nbsp;
                                    <input type="radio" name="title" value="Ms"> Ms.&nbsp;&nbsp;
                                    <input type="radio" name="title" value="Others"> Others
                                  </div>
                                <div class="form-group">
                                <div class="form-row">
                                  <div class="col-md-5">
                                    <input type="text" class="form-control input-xlarge" id="firstname" name="firstname" placeholder="First Name" required>
                                  </div>
                                  <div class="col-md-5">
                                    <input type="text" class="form-control input-xlarge" id="othername" placeholder=" Other Name" name="othername" required>
                                  </div>
                                 </div>
                              </div>
                               <div class="form-group">
                                <div class="form-row">
                                  <div class="col-md-5">
                                    <input type="text" class="form-control input-xlarge" id="state_og" name="state_og" placeholder="State of Origin" required>
                                  </div>
                                  <div class="col-md-5">
                                    <input type="text" class="form-control input-xlarge" id="local_og" placeholder="LGA of Origin" name="local_og" required>
                                  </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                <div class="form-row">
                                  <div class="col-md-5">
                                   <label for="sex"><strong>Sex:</strong></label>&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="sex" value="Male"> Male&nbsp;&nbsp;
                                    <input type="radio" name="sex" value="Female"> Female&nbsp;&nbsp;&nbsp;
                                  </div>
                                  <div class="col-md-5">
                                    <label for="marital_s"><strong>Marital Status:</strong></label>&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="marital_s" value="Single"> Single&nbsp;&nbsp;
                                    <input type="radio" name="marital_s" value="Married"> Married&nbsp;&nbsp; 
                                    <input type="radio" name="marital_s" value="Others"> Others&nbsp;&nbsp;  
                                  </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                <div class="form-row">
                                  <div class="col-md-5">
                                    <input type="text" class="form-control input-xlarge" id="place_ob" name="place_ob" placeholder="Place Of Birth" required>
                                  </div>
                                  <div class="col-md-5">
                                    Year of Graduation: <input type="date" name="year_g" autofocus id="year_g" value="1990-12-01">
                                  </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                <div class="form-row">
                                  <div class="col-md-5">
                                    <input type="text" class="form-control input-xlarge" id="email" name="email" placeholder="Email" required>
                                  </div>
                                  <div class="col-md-5">
                                    <input type="text" class="form-control input-xlarge" id="phone" placeholder="Phone Number" name="phone" required>
                                  </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                <div class="form-row">
                                  <div class="col-md-5">
                                    <input type="text" class="form-control input-xlarge" id="highest_q" name="highest_q" placeholder="Highest Qualification" required>
                                  </div>
                                  <div class="col-md-5">
                                    <input type="text" class="form-control input-xlarge" id="religion" placeholder="Religion" name="religion" required>
                                  </div>
                                 </div>
                              </div>
                               <div class="form-group">
                               <div class="form-row">
                               <div class="col-md-10"> 
                        <textarea class="form-control input-xlarge" id="c_address" name="c_address" placeholder="Contact Address" rows="3"></textarea>
                        </div>
                        </div>
                      </div>
                      <div class="academy-buttons-area mb-100">
                      <!--<button type="submit" class="btn academy-btn m-2" name="save_bio">Register</button>-->
                      <a href="prereg.php" class="btn academy-btn m-2">Register</a>
                      
                       </div>
                     </form>
                      </div>
          			</div>
                   </div>
                  </div>      
                        

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