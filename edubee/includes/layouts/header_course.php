<?php  
  //session_start();
  function site_header($path,$status){
    ?>



        <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#313B3D;border-width:0px;"role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              
               <a class="navbar-brand" style="margin-top:14px;margin-bottom:16px;font-size:24px;color:#fff;margin-left:-50px;" href="index.php">EDU<span>BEE</span></a>           
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
			
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav" >
			  
              <li>
                               <div class="col-md-20col-md-20 pull-center" style="margin-left:-30px">
                                        <form class="navbar-form" role="search" action="search.php" method="POST">
                                                <div class="input-group" style="margin-top:10px; margin-left:-30px">
                                                        <input type="text" class="form-control" name="search" placeholder="Search Courses and Projects"  name="srch-term" id="srch-term" >
                                                <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</form>
                              </div> 
                    </li>
                    
                    <?php if(basename($path == "index.php")){

                      ?>
                <li class="active"><a href="index.php">HOME</a></li><?php }else{?>

                  <li><a href="index.php" style="color:#fff;margin-top:14px;" >HOME</a></li><?php } ?>

                  <?php if(basename($path == "course.php")){

                      ?>
                <li class="active"><a href="listofcourses.php" style="background-color:#313B3D;margin-top:14px;">COURSES</a></li><?php }else{?>

                  <li><a href="listofcourses.php">COURSES</a></li><?php } ?>


                  <?php if(basename($path == "project.php")){

                      ?>
                <li class="active"><a href="listofprojects.php">PROJECTS</a></li><?php }else{?>

                  <li><a href="listofprojects.php" style="color:#fff;margin-top:14px;">PROJECTS</a></li><?php } ?>

                  <?php if(basename($path == "contact.php")){

                      ?>
                <li class="active"><a href="contact.php">CONTACT US</a></li><?php }else{?>

                  <li><a href="contact.php" style="color:#fff;margin-top:14px;">CONTACT US</a></li><?php } ?>

<!--                 <li><a href="course.php">Course</a></li>
                <li><a href="project.html">Projects</a></li>         
                <li><a href="contact.php">Contact us</a></li> -->
               <!--  <li><a href="login.html" style="">Login/signup</a></li>  -->
              
                <?php if(basename($path == "login.php") && $status != 1) {?>
                <li class="active"><a href="login.php">SIGN IN</a></li><?php } elseif($status!=1){?>
                  <li><a href="login.php">SIGN IN</a></li><?php }elseif($path == "dashboard.php"){ ?>
                  <li class="active"><a href="dashboard.php">DASHBOARD</a></li><?php }else{ ?>
                  <li><a href="dashboard.php" style="color:#fff;margin-top:14px;">DASHBOARD</a></li><?php } ?>


                   <?php if($status == 1) {?>
                <li><a href="logout.php" style="color:#fff;margin-top:14px;">LOGOUT</a></li><?php } ?>


                             
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>


<?php

  }

   //echo $message;
   //if($message == 0) redirect_to("./course.php");

 ?>
