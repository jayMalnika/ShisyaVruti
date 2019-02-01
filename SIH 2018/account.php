<?php
//============================insert query===============================//
	$con=mysqli_connect("localhost","root","","shishyavruti");
	//mysql_select_db("first",$con) or die("error");
	
	
if(isset($_REQUEST['submit']))
{
    $schoolname=$_REQUEST["school_name"];
    $schoolcode=$_REQUEST["school_code"];
    $address=$_REQUEST["address"];
    $city=$_REQUEST["city_name"];
    $state=$_REQUEST["state_name"];
    $pincode=$_REQUEST["pin_code"];
    $contact=$_REQUEST["contact_no"];
    $email=$_REQUEST["email"];
    $students=$_REQUEST["total_students"];
  $qu="insert into account ( `school_name`, `school_code`, `address`, `city`, `state` , `pincode` , `contact`, `email`, `student`) VALUES   ('$schoolname','$schoolcode','$address','$city', '$state', '$pincode', '$contact','$email','$students')";
	
	if(!mysqli_query($con,$qu))
	{
		echo mysqli_error($con);
	}
  echo "<script>alert('Data inserted Successfully');</script>";
  
//COOKIE........
$cookie_name = "$schoolname";
$cookie_code = "$schoolcode";
setcookie($cookie_name, $cookie_code, time() + (86400 * 30), "/"); // 86400 = 1 day
}
include('session.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>ShishyaVruti | Main</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

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
              <li class="active"><a href="#">Account</a></li>
              <li><a href="student_cnr.php">Student Corner</a></li>
              <li><a href="student.php">Student Registration</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="logout.php" >Log Out</a></li>
              <li><a href="#"> <b><i><?php echo $login_session; ?></i></b></li></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
      <script Language="Javascript">
        alert('Welcome :  <?php echo $login_session; ?>');
      </script>
      <!-- page header heading account info -->

      <div class="container page-header">
        <h3>School Info</h3>
      </div>

      <!-- Information form -->
      <div class="container account_form">

            <form class="form-horizontal" action="" method="post"  id="contact_form">
            <fieldset>
     

            <!--School Name-->
            
            <div class="form-group">
              <label class="col-md-4 control-label">School Name</label>  
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
              <input  name="school_name" placeholder="School Name" class="form-control"  type="text">
                </div>
              </div>
            </div>
            
            <!--School code-->
            
            <div class="form-group">
              <label class="col-md-4 control-label" >School Code</label> 
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
              <input name="school_code" placeholder="School code" class="form-control"  type="text">
                </div>
              </div>
            </div>


            <!-- School Address -->
            <div class="form-group">
                <label class="col-md-4 control-label">Address</label>  
                <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
                    <textarea  name="address" placeholder="Address" class="form-control"  type="text"></textarea>
                  </div>
                </div>
            </div>

            <!-- School City -->
            <div class="form-group">
                <label class="col-md-4 control-label">City</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input  name="city_name" placeholder="City" class="form-control"  type="text">
                </div>
                </div>
            </div>

            <!-- School state -->
            <div class="form-group">
                <label class="col-md-4 control-label">State</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input  name="state_name" placeholder="State" class="form-control"  type="text">
                </div>
                </div>
            </div>

            <!-- pincode -->
            <div class="form-group">
                <label class="col-md-4 control-label">Pin Code</label>  
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input name="pin_code" placeholder="" class="form-control" type="text">
                  </div>
                </div>
            </div>

            <!-- School Contact -->
            <div class="form-group">
                <label class="col-md-4 control-label">Contact No.</label>  
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input name="contact_no" placeholder="(091)" class="form-control" type="text">
                  </div>
                </div>
            </div>

            <!-- school email -->
            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>  
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="email" placeholder="E-Mail Address" class="form-control"  type="email">
                  </div>
                </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-4 control-label">Total Students</label>  
              <div class="col-md-4 inputGroupContainer">
                 <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input  name="total_students" placeholder="" class="form-control"  type="text">
                 </div>
              </div>
            </div>
            
            
            <!-- Select Basic -->
            
            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>
            
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label"></label>
              <div class="col-md-4"><br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-success" name="submit" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspREGISTER <span class="glyphicon"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
              </div>
            </div>

            
        </fieldset>
      </form>
  </div> <!-- container -->


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
        <p>+9555 123456</p>
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