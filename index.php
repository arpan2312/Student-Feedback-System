<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>GEU Feedback System</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/drop.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#DF3A01">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"  style="color:#FFFFFF">GEU Feedback System</a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php" class="active"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					
					<li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php?info=about"><i class="fa fa-home fa-fw"></i>About</a>
                    </li>
					
					<li><a style="color:#FFFFFF" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
				
				
								<li><a style="color:#FFFFFF" href="admin"><i class="fa fa-user"> </i> Admin Login</a></li>
	
          
          
    
     
	  
	
    
	  
	  
	 <li>        
               <li>     <div class="dropdown">
                   <button class="dropbtn"><i class="fa fa-group"></i><a style="color:#FFFFFF" >Login</a></button>
  <div class="dropdown-content">
    <a href="index.php?info=login">Student Login</a>
    <a href="index.php?info=faculty_login">Faculty Login</a>
                   </div> 
</div>
	  
	  
	 <li>
                        <a style="color:#FFFFFF" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
                    </li>
					 	
					
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
		<!-- slider start -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/geu.jpg');"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/1.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('images/2.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			
			
			
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- slider -->			
	
	
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
               
				
				
<div class="icon-bar">
  <a href="https://www.facebook.com/GEUOfficial" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a> 
  <a href="https://twitter.com/geudehradun" class="twitter"><i class="fa fa-twitter" target="_blank"></i></a> 
  <a href="https://www.google.co.in/search?q=graphic+era+university+dehradun&rlz=1C1CHBF_enIN737IN737&oq=graphic+era+university+dehradun&aqs=chrome..69i57j69i61l3j0l2.9024j1j7&sourceid=chrome&ie=UTF-8" class="google" target="_blank"><i class="fa fa-google"></i></a> 
  <a href="https://www.linkedin.com/company/graphic-era" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
  <a href="https://www.youtube.com/user/GraphicEraUniversity" class="youtube" target="_blank"><i class="fa fa-youtube"></i></a> 
<a href="https://www.instagram.com/geuofficial/" class="instagram" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
</div>
	
	
				
				
                <h2 style="text-align:center"><strong>Graphic Era University</strong></h2>	
			<div class="para">
				
				Graphic Era (Deemed to be University) formerly Graphic Era Institute of Technology is an institute of higher education Deemed to be University located in Clement Town, Dehradun, Uttarakhand, India. The university was founded as <strong>'Graphic Era Institute of Technology'</strong> in 1993 and in 2008 it has accorded with the status of Deemed to be University.
                <br><br>
                Graphic Era (Deemed to be University) was founded in 1993 and started with undergraduate programs in core engineering and allied sciences. In 2008 the Institute was accorded the status of Deemed University.In 2015 Graphic Era was accredited by the National Assessment and Accreditation Council (NAAC) with grade <strong>'A'</strong>.
                <br><br>
                Deemed University Status Under General Category August 14, 2008 Vide: Ministry of Human Resource Development, GOI, Notification F, 9-48/2007 U-3(A) Under Section 3 of the UGC Act 1956.
                Accredited by National Assessment Accreditation Council (NAAC) with grade 'A'
                <br><br>
                The university now offers 40 undergraduate and postgraduate courses across disciplines like engineering and technology, management, allied sciences, humanities and social sciences, and hospitality.GEU has 6 schools:<br>

1.School of Engineering and Technology<br>
2.School of Computer Application<br>
3.School of Management Studies<br>
4.School of Hotel Management and Hospitality<br>
5.School of Humanities and Social Sciences<br>
6.School of Commerce<br>
                
	This feedback system is made to improve the teacher student dynamic and in doing so improve the university<br><br>
                <h3><strong><u>Transforming Dreams Into Reality </u></strong></h3>
			</div>
			
				</div>
            <div id="leftsidebar" class="sidebar">
                <h3>Go to:</h3>
                <ul>
                    <li><a href="http://www.geu.ac.in/" target="_blank">Graphic Era Deemed to be University Website</a></li>
                    <li><a href="http://csitgeu.in/wp/" target="_blank">CS/IT Department Website</a></li>
                    <li><a href="http://www.btechgeu.in/" target="_blank">Graphic Era B.tech Website</a></li>
                
                </ul>
            </div>
            <div id="rightsidebar" class="sidebar">
                <h3>Why Give Feedback?</h3>
                <ul>
                    <li><a href="#">Feedback helps both teachers and students grow which leads to betterment of the institue</a></li>
                    <li><a href="#">Feedback can motivate.</a></li>
                    <li><a href="#">Feedback can improve performance. </a></li>
                    <li><a href="#">Feedback can motivate.</a></li>
                </ul>
            </div>
			
			
				<?php } ?>
            </div>
            
    </div>
    <!-- /.container -->
	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:5px;height:26px; background:#DF3A01">
		<span style="color:#FFFFFF">Developed By:- <strong>Arpan Garg / Sec-C / Roll No - 54 </strong></a> </span>
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
