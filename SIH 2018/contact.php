<?php
//============================insert query===============================//
	$con=mysqli_connect("localhost","root","","shishyavruti");
	//mysql_select_db("first",$con) or die("error");
	
	
if(isset($_REQUEST['submit']))
{
    $name=$_REQUEST["nm"];
    $email=$_REQUEST["em"];
    $phone=$_REQUEST["ph"];
    $message=$_REQUEST["ms"];
   
  $qu="insert into contact ( `name`, `email`, `mobile`, `message`) VALUES   ('$name','$email','$phone','$message')";
	
	if(!mysqli_query($con,$qu))
	{
		echo mysqli_error($con);
	}
	echo "<script>alert('Message Send Successfully');</script>";
}
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>ShishyaVruti | Contact Us</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  </head>
  <body>
    <!-- header --> 
    <header>
      <div class="logo">
        <div class="col-md-3">
          <img src="img/img2.png" alt="logo" width="40%" height="40%">
        </div>
        <div class="col-md-9 brand">
            <h3>ShishyaVruti</h3>
        </div>
      </div>
    </header>

    <!-- navbar -->
    <nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="account.php">Account</a></li>
              <li><a href="student_cnr.php">Student Corner</a></li>
              <li><a href="student.php">Student Registration</a></li>
              <li class="active"><a href="contact.php">Contact Us</a></li>
              <li><a href="logout.php">Log Out </a></li>
              <li><a href="#"> <b><i><?php echo $login_session; ?></i></b></li></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>


      <div class="container animated fadeIn">

            <div class="row">
              <h1 class="header-title"> Contact  Us</h1>
              <hr>
              <div class="col-sm-12" id="parent">
                  <div class="col-sm-6">
                  <iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.243663276635!2d72.66508491448386!3d23.23421868484625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c2b0b4ea551e9%3A0xa3a505cbb8419950!2sGujarat+State+Education+Board!5e0!3m2!1sen!2sin!4v1514380643149" allowfullscreen></iframe>
                  </div>
          
                  <div class="col-sm-6">
                      <form action="" class="contact-form" method="post">
              
                          <div class="form-group">
                            <input type="text" class="form-control" id="name" name="nm" placeholder="Name" required="" autofocus="">
                          </div>
                      
                      
                          <div class="form-group form_left">
                            <input type="email" class="form-control" id="email" name="em" placeholder="Email" required="">
                          </div>
                      
                        <div class="form-group">
                             <input type="text" class="form-control" id="phone" name="ph" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Mobile No." required="">
                        </div>
                        <div class="form-group">
                        <textarea class="form-control textarea-contact" rows="5" id="comment" name="ms" placeholder="Type Your Message/Feedback here..." required=""></textarea>
                        <br>
                          <button class="btn btn-warning" name="submit"> <span class="glyphicon glyphicon-send"></span> Send </button>
                        </div>
                       </form>
                  </div>
              </div>
            </div>
          
            <div class="container second-portion">
              <div class="row">
                  <!-- Boxes de Acoes -->
                  <div class="col-xs-12 col-sm-6 col-lg-4">
                      <div class="box">							
                          <div class="icon">
                              <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                              <div class="info">
                                  <h3 class="title">MAIL & WEBSITE</h3>
                                  <p>
                                      <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp shishyavruti10@gmail.com
                                      <br>
                                      <br>
                                      <i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.shishyavruti.co.in
                                  </p>
                              
                              </div>
                          </div>
                          <div class="space"></div>
                      </div> 
                  </div>
                      
                  <div class="col-xs-12 col-sm-6 col-lg-4">
                      <div class="box">							
                          <div class="icon">
                              <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                              <div class="info">
                                  <h3 class="title">CONTACT</h3>
                                  <p>
                                      <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-9624XXXXX
                                      <br>
                                      <br>
                                      <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+91)-7567065254 
                                  </p>
                              </div>
                          </div>
                          <div class="space"></div>
                      </div> 
                  </div>
                      
                  <div class="col-xs-12 col-sm-6 col-lg-4">
                      <div class="box">							
                          <div class="icon">
                              <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                              <div class="info">
                                  <h3 class="title">ADDRESS</h3>
                                  <p>
                                       <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 
                                       Near Vishwakarma Shopping Centre, Rd Number 6, Sector 21, Gandhinagar, Gujarat 382021
                                  </p>
                              </div>
                          </div>
                          <div class="space"></div>
                      </div> 
                  </div>		    
                  <!-- /Boxes de Acoes -->
                  
              </div>
          </div>
          
          </div>

          <footer class="footer-distributed">

            <div class="footer-left">
    
                <img src="img/img2.png" alt="logo" width="20%" height="20%">
    
                <h3>Shishya<span>Vruti</span></h3>
        
        
              <p class="footer-company-name">Shishyavruti &copy; 2017</p>
            </div>
        
            <div class="footer-center">
        
              <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Near Vishwakarma Shopping</span>Gujarat 382021</p>
              </div>
        
              <div>
                <i class="fa fa-phone"></i>
                <p>+1 555 123456</p>
              </div>
        
              <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">www.shishyavruti.co.in</a></p>
              </div>
        
            </div>
        
            <div class="footer-right">
        
              <p class="footer-company-about">
                <span>About the Website</span>
                We have developed a website, Shishyavruti, whose aim is to provide the data of the meritorious students getting primary education.
                 </p>
        
              <div class="footer-icons">
        
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
        
              </div>
        
            </div>
        
          </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>