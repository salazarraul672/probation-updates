<?php include('header.php'); 
include_once("database.php");


?>

<div class="hero">
<div class="hero-inner">
    <h3>Administrator Home Page!</h3>
<p>
    From This page you will be able to manage new admins and accept or reject updates from users.
    NOTES: Need new nav bar for admins.!!!
</p>


</div>
<div>

<?php

$SQL_select = "SELECT * FROM user_tbl";
$result = mysqli_query($connection, $SQL_select);


echo '<table border = 1>';
echo '<tr><td>First Name</td><td>Last Name</td><td>Username</td><td>Password</td></tr>';
while($row=mysqli_fetch_array($result)){
    $fname = $row['FirstName'];
    $lname = $row['LastName'];
    $dbpassword = $row['Password'];
    $firstName = $row['FirstName'];
    $timestamp =$row['created_on'];
    $accounttype = $row['Account_Type'];

  echo '<tr>
        <td>'       
        .$row['FirstName'].' </td><td>'.$row['LastName'].'</td><td> '.$row['Username'].'</td><td> '.$row['Password'].
        
        '</td>
        </tr>';
}
echo '</table>';
?>

</div>
<div class="box footer">This is the footer</div> </div>
<script src="css/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>