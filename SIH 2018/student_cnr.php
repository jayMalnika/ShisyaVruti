<?php
include('session.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shishyavruti";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM student";
$result = $conn->query($sql);



?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>ShishyaVruti | Student Corner</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <!-- header --> 
    <div id="a1">
    <header >
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
              <li class="active"><a href="student_cnr.php">Student Corner</a></li>
              <li><a href="student.php">Student Registration</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="logout.php">Log Out </a></li>
              <li><a href="#"> <b><i><?php echo $login_session; ?></i></b></li></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
</div>

      <!-- page header heading account info -->

      <div class="container page-header">
        <h3>Registered Students</h3>
      </div>

      

        <br>

      <div class="container">
          <table class="table table-striped table-hover" border=2>
              <tr><h4><u><center>
                  <th><h4><b><u>FirstName</h4></b></th>
                  <th><h4><b><u>lastName</th>
                  <th><h4><b><u>ParentName</th>
                  <th><h4><b><u>Board</th>
                  <th><h4><b><u>DOB</th>
                  <th><h4><b><u>AadharNo</th>
                  <th><h4><b><u>Gr_No</th>
                  <th><h4><b><u>Email</th>
                  <th><h4><b><u>Grade</th>
                  <th><h4><b><u>Admission Year</th>
                  <th><h4><b><u>Contact</th>
                  <th><h4><b><u>Parent_Contact</th>
                  <th><h4><b><u>SchoolName</th>
                  <th><h4><b><u>Res_Address</th>
                  <th><h4><b><u>City</th>
                  <th><h4><b><u>With Disability?</th>
                  <th><h4><b><u>Academic Achievements</th>
                  <th><h4><b><u>Sports Achievements</th>
                  <th><h4><b><u>Extra Ciricullar Achievements</th>
                  <th><h4><b><u>Delete Record</th>
                </tr></h4></u></center>
          <?php  
            if ($result->num_rows > 0) {
                // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td> ". $row["firstname"]. " </td><td> ". $row["lastname"]. " </td><td>" . $row["parentname"] . "</td><td>". $row["board"]. " </td><td> ". $row["dob"]. " </td><td>" . $row["adharno"] . "</td><td>". $row["grno"]. " </td><td> ". $row["email"]. " </td><td>" . $row["grade"] . "</td><td>"
            . $row["admyear"]. " </td><td> ". $row["contact"]. " </td><td>" . $row["guardiancontact"] . "</td><td>". $row["schoolname"]. " </td><td> ". $row["address"]. " </td><td>" . $row["city"] . "</td><td>". $row["pwd"]. " </td><td> ". $row["academinachiev"]. " </td><td>" . $row["sportsachiev"] . "</td><td>". $row["extraachiev"] . "</td><td><a href='student_d.php?did=". $row["grno"]."'>Delete</a></td></tr>";
              }
                } else {
                    echo "0 results";
                }
             ?>
            </table>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
<?php
$conn->close();
?>