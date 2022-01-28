<?php include('header.php'); 
include_once("database.php");
?>
<body>
    <div class="features">

  <div class='featured-item'>
<?php 
if(empty($_GET)){
    echo "<h3> You did not select any fields in the previous page. Please go back to previous page.";
    
}else{


  // 
 echo $firstName." ".$lastName;
 echo "<br>Username: ".$_SESSION['username'];
 echo "<br>User ID: ".$userid."<br>";
$datetime = date("M-d-Y h:i:s A");
  $SQL_INSERT_UPDATES = "INSERT INTO updates_tbl(`User_ID`, `Status`) VALUES ('$userid','Pending')";  
  if(mysqli_query($connection, $SQL_INSERT_UPDATES)){                

    echo "<div class='notice-2'><br>Update was inserted.</div>";

     }else{
        echo "<script>alert('Not Inserted Was Not Created.')</script>";
        }
//echo date("h:i:s") . "\n";

echo $datetime. "<br>";

foreach($_GET as $key=>$value){

    echo $key.": ".$value;
    echo "<br>";

}
echo "</div>";
}
?>
    </div>
    </div></div>
<script src="css/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>