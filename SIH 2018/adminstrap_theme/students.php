<?php 
    include('count.php');
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
    <title>Admin Area | Students</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php"><b>Shishyavruti</b></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Dashboard</a></li>
            <li class="active"><a href="students.php">Students</a></li>
            <li><a href="schools.php">Schools</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome</a></li>
            <li><a href="../index.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Students<small></small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.php">Dashboard</a></li>
          <li class="active">Students</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="schools.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Schools/Universities <span class="badge"><?php echo("$count1"); ?></span></a>
                <a href="students.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Students <span class="badge"><?php echo("$count"); ?></span></a>
            </div>

            
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Students</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Students...">
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover" border=1>
                <tr><h4><u><center>
                  <th><h4><b><u>First Name</h4></b></th>
                  <th><h4><b><u>Last Name</th>
                  <th><h4><b><u>Board</th>
                  <th><h4><b><u>School</th>
                  <th><h4><b><u> City</th>
                  <th><h4><b><u>Contact</th>

                </tr></h4></u></center>
                <?php  
                    if ($result->num_rows > 0) {
                        // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<tr><td> ". $row["firstname"]. " </td><td> ". $row["lastname"]. " </td><td>" . $row["board"] . "</td><td>". $row["schoolname"]. " </td><td> ". $row["city"]. " </td><td> ". $row["contact"]. "</td></tr>";
                    }
                        } else {
                            echo "0 results";
                        }
                    ?>
                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    <footer class="footer-distributed">

<div class="footer-left">

    <img src="../img/img2.png" alt="logo" width="20%" height="20%">

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


    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
