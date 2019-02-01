<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShishyaVruti | Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="javascript/signup.js">
</head>
<body>
        <div class="container">

          <form class="well form-horizontal" action=" " method="post"  id="contact_form">
            <fieldset>
            
            <!-- Form Name -->
            <legend><center><h2><b>Registration Form</b></h2></center></legend><br>
                         
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
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="account.html" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
              </div>
            </div>
            </fieldset>
          </form>
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
            
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>