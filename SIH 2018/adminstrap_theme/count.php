<?php 
    global $count, $count1;
    $con=mysqli_connect("localhost","root","","shishyavruti");
    $sql = "SELECT * FROM student";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        
    while($row = $result->fetch_assoc()) {
        $count +=1;
    }
    }

    $sql1= "SELECT  * from account";
    $res1=$con->query($sql1);
    if ($res1->num_rows > 0) {
        // output data of each row
        
    while($row = $res1->fetch_assoc()) {
        $count1 +=1;
    }
    }
    
?>