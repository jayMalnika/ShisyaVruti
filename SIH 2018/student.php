<?php
//============================insert query===============================//
	$con=mysqli_connect("localhost","root","","shishyavruti");
	//mysql_select_db("first",$con) or die("error");
	
	
if(isset($_REQUEST['submit']))
{
    $firstname=$_REQUEST["first_name"];
    $lastname=$_REQUEST["last_name"];
    $parentname=$_REQUEST["parent_name"];
    $board=$_REQUEST["board"];
    $dob=$_REQUEST["DOB"];
    $adharno=$_REQUEST["aadhaar_number"];
    $grno=$_REQUEST["gr_number"];
    $email=$_REQUEST["email"];
    $grade=$_REQUEST["grade"];
    $admyear=$_REQUEST["Admission_year"];
    $contact=$_REQUEST["contact_no"];
    $guardiancontact=$_REQUEST["parentcontact_no"];
    $schoolname=$_REQUEST["school_name"];
    $address=$_REQUEST["res_address"];
    $city=$_REQUEST["city_name"];
    $pwd=$_REQUEST["pwd"];
    $academinachiev=$_REQUEST["aa"];
    $sportsachiev=$_REQUEST["sa"];
    $extraachiev=$_REQUEST["ea"];

  $qu="insert into student ( `firstname`, `lastname`, `parentname`, `board`, `dob` , `adharno` , `grno`, `email`, `grade`,`admyear`,`contact`,`guardiancontact`,`schoolname`,`address`,`city`,`pwd`,`academinachiev`,`sportsachiev`,`extraachiev`) VALUES  
   ('$firstname','$lastname','$parentname','$board', '$dob', '$adharno', '$grno','$email','$grade','$admyear','$contact','$guardiancontact', '$schoolname', '$address', '$city','$pwd','$academinachiev','$sportsachiev','$extraachiev')";
	
	if(!mysqli_query($con,$qu))
	{
		echo mysqli_error($con);
	}
  echo "<script>alert('Data inserted Successfully');</script>";
  //COOKIE........
$cookie_fname = "$firstname";
$cookie_lname = "$lastname";
$cookie_pname = "$parentname";
setcookie($cookie_fname, $cookie_lname, $cookie_pname, time() + (86400 * 30), "/"); // 86400 = 1 day

}
include('session.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>ShishyaVruti | Student Registration</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  </head>
  <body>
    <!-- header --> 
    <header>
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
              <li class="active"><a href="#">Student Registration</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="logout.php" >Log Out</a></li>
              <li><a href="#"> <b><i><?php echo $login_session; ?></i></b></li></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>


      <!-- page header heading account info -->

      <div class="container page-header">
        <h3>New Student Registration</h3>
      </div>

      <div class="container account_form">

            <form class="form-horizontal" action=" " method="post"  id="contact_form">
            <fieldset>
            
           
            
            <!-- Text input-->
            
            <div class="form-group">
              <label class="col-md-4 control-label">First Name</label>  
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
                </div>
              </div>
            </div>
            
            <!-- Text input-->
            
            <div class="form-group">
              <label class="col-md-4 control-label" >Last Name</label> 
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Parent/Guardian Name</label>  
              <div class="col-md-4 inputGroupContainer">
                 <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input  name="parent_name" placeholder="Parent/Guardian Name" class="form-control"  type="text">
                 </div>
              </div>
            </div>
            
              <div class="form-group"> 
              <label class="col-md-4 control-label">Board </label>
                <div class="col-md-4 selectContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="board" class="form-control selectpicker">
                  <option value="">Select your Board</option>
                  <option>CBSE</option>
                  <option>GSEB</option>
                  <option >ICSE</option>
                  <option >Gujarati Medium</option>
                </select>
              </div>
            </div>
            </div>
              <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">Date Of Birth</label>  
                  <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                          <input name="DOB" placeholder="DOB" class="form-control" type="date">
                      </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Aadhaar No.</label>  
                <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                    <input  name="aadhaar_number" placeholder="Aadhaar Number" class="form-control"  type="text">
                  </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Gr. No.</label>  
                <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                    <input  name="gr_number" placeholder="Gr Number" class="form-control"  type="text">
                  </div>
                </div>
            </div>
              
            
            <!-- Text input-->
                  <div class="form-group">
              <label class="col-md-4 control-label">E-Mail</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                </div>
              </div>
            </div>
              
            <!-- Text input-->
                  <div class="form-group">
              <label class="col-md-4 control-label">Grade</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input name="grade" placeholder="Grade" class="form-control"  type="text">
                </div>
              </div>
            </div>
              <!-- Text input-->
                  <div class="form-group">
              <label class="col-md-4 control-label">Admission Year</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input name="Admission_year" placeholder="Admission year" class="form-control"  type="text">
                </div>
              </div>
            </div>
            
            <!-- Text input-->
                  
            <div class="form-group">
              <label class="col-md-4 control-label">Contact No.</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input name="contact_no" placeholder="(091)" class="form-control" type="text">
                </div>
              </div>
            </div>
            <!-- Text input-->
                  
            <div class="form-group">
              <label class="col-md-4 control-label">Guardian Contact No.</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input name="parentcontact_no" placeholder="(091)" class="form-control" type="text">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">School Name</label>  
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
              <input  name="school_name" placeholder="School Name" class="form-control"  type="text">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Residential Address</label>  
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
                  <textarea  name="res_address" placeholder="Address" class="form-control"  type="text"></textarea>
                </div>
              </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">City</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input  name="city_name" placeholder="City" class="form-control"  type="text">
                </div>
                </div>
            </div>

            <div class="form-group"> 
                <label class="col-md-4 control-label">Person With Disability</label>
                <div class="col-md-4 selectContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                    <select name="pwd" class="form-control selectpicker">
                      <option value=""></option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                </div>
              </div>
              <p class="help-block">If yes, Upload related documents</p>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label"> Upload Docs</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                         <input class="btn" type="file">
                         
                    </div>
                </div>
            </div>


            <!-- Academic Achievements -->
            <div class="form-group"> 
                    <label class="col-md-4 control-label">Academic  Achievements</label>
                    <div class="col-md-4 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                        <select name="aa" class="form-control selectpicker">
                          <option value=""></option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                    </div>
                  </div>
                  <p class="help-block">If Yes, Add Description</p>
            </div>
            
        

        <!-- Sports Achievments -->
        <div class="form-group"> 
                <label class="col-md-4 control-label">Sports  Achievements</label>
                <div class="col-md-4 selectContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                    <select name="sa" class="form-control selectpicker">
                      <option value=""></option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                </div>
              </div>
              <p class="help-block">If Yes, Add Description</p>
        </div>

            <!-- extra - cur Achievments -->
            <div class="form-group"> 
                    <label class="col-md-4 control-label">Extra-Curricular  Achievements</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                        <select name="ea" class="form-control selectpicker">
                            <option value=""></option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    </div>
                    <p class="help-block">If Yes, Add Description</p>
            </div>

        <!-- Descriptions -->
        <script type="text/javascript">

            $(document).ready(function(){
    
                var counter = 2;
    
                $("#addButton").click(function () {
    
                if(counter>10){
                        alert("Only 10 textboxes allow");
                        return false;
                }
    
                var newTextBoxDiv = $(document.createElement('div'))
                    .attr("id", 'TextBoxDiv' + counter);
    
                newTextBoxDiv.after().html('<label> #'+ counter + ' : </label>' +
                    '<input type="text" name="textbox' + counter +
                    '" id="textbox' + counter + '" value="" >');
    
                newTextBoxDiv.appendTo("#TextBoxesGroup");
    
    
                counter++;
                });
    
                $("#removeButton").click(function () {
                if(counter==1){
                    alert("No more textbox to remove");
                    return false;
                }
    
                counter--;
    
                    $("#TextBoxDiv" + counter).remove();
    
                });
    
                $("#getButtonValue").click(function () {
    
                var msg = '';
                for(i=1; i<counter; i++){
                msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
                }
                    alert(msg);
                });
            });
            </script>
           
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4 inputGroupContainer">
                        <div id='TextBoxesGroup'>
                                <div id="TextBoxDiv1">
                                    <label>#1 : </label><input type='textbox' id='textbox1' >
                                </div>
                            </div>
                            <div style="padding: 10px;">
                                <input class="btn btn-primary" type='button' value='Add Button' id='addButton'>
                                <input class="btn btn-primary" type='button' value='Remove Button' id='removeButton'>
                            </div>
                </div>
            </div>

            <!-- upload multiple docs -->
            <div class="form-group">
                    <label class="col-md-4 control-label"> Upload Docs</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                             <input class="btn" type="file" multiple>
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
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-success" name="submit">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
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