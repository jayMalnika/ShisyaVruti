<?php
include('login.php'); // Includes Login 

if(isset($_SESSION['login_user'])){
header("location: account.php"); //redirecting
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShishyaVruti | Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <section>
        <div class="jumbotron">
            <h1>Welcome to SHISHYAVRUTI</h1>
            <p>A one step solution to primary scholarships</p>
            <p><a class="btn btn-primary btn-md" href="#loginbox" role="button">Learn more</a></p>
        </div>
    </section>

    <aside id="sidebar login">
        <div class="container">    
            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" name="loginForm" class="form-horizontal" role="form" method="post" action="">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                        <div class="checkbox">
                                        <label>
                                            <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                        </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                        <input type="submit" value="Log In" id="btn-login"  class="btn btn-success" name="submit" onclick="return check(this.form)">
                                        <div><?php echo $error; ?></div>
                                    </div>
                                    
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                         
                                        </div>
                                    </div>
                                </div>    
                            </form>     
                            <script language="javascript">
                                    function check(form)
                                    {
                                        if(form.username.value == "admin" && form.password.value == "admin123")
                                        {
                                            document.loginForm.action = "adminstrap_theme/index.php";
                                            return true;
                                        }
                                    }
                            </script>
                        </div>                     
                    </div>  
            </div>
        </div>
    </aside>

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