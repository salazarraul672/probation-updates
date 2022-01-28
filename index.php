<?php 

session_start();
include_once("database.php");
ob_start();

if(isset($_REQUEST['login']))
{

    if(!empty($_REQUEST['username']) && !empty($_REQUEST['password']))
    {
        $username = strip_tags($_REQUEST['username']);
        $password = strip_tags($_REQUEST['password']);

        $username = stripslashes($username);
        $password = stripslashes($password);

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $SQL_select = "SELECT * FROM user_tbl WHERE Username = '$username' LIMIT 1";
        $result = mysqli_query($connection, $SQL_select);
        //echo "hay2";

        $row = mysqli_fetch_array($result);
          
            $count = mysqli_num_rows($result);

        if($count < 1 )
        {
            echo '<script>alert("Password or Username not Found, Please Register.
            <br> Your Username is the first 2 letters of your First and Last name plus the last 4 digits of your SSN.")</script>';
             header("refresh: 0.1; url=index.php");
            // echo "Password and/or Email not Found.";                     
             die();
         }else{

            $dbpassword = $row['Password'];
            $firstName = $row['FirstName'];
            $timestamp =$row['created_on'];
            $accounttype = $row['Account_Type'];
             //die();
         }
            //login credentials
        if($password == $dbpassword){

            $_SESSION['username'] = $row['Username'];
            $_SESSION['firstName'] = $row['FirstName'];
            $_SESSION['lastName'] = $row['LastName'];
            $_SESSION['password'] = $row['Password'];
            $_SESSION['userid'] = $row['User_ID'];
            $_SESSION['timestamp'] = $row['created_on'];

            if($accounttype == "user"){
            header("refresh: 0.1; url=home.php");
            }else{
                header("refresh: 0.1; url=adminhome.php");

            }
        }else{
            echo "<div class='notice-2'><br>Incorrect Password.</div>";
        }
    }
    else{
        echo "Please enter Username or password.";
    }

}







?>
<html lang="en">
<head>

    <link rel="stylesheet" href="font-awesome/css/all.css">
    <link rel="stylesheet" href="css/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>PD Registration</title>
</head>
<body>

    <div class="form">   
        <div><img src="images/Frenchpd.png" alt="" height="200px"></div>
         <div class="title">
            <p>S.O. Registrant Updates Website</p>
        </div>
 
        <form class="login-form" action="" method="post" >
           <!-- <i class="fa fa-user-circle"></i>-->
            <input class="user-input" type="text" name="username" placeholder="Username" required>
            <input class="user-input" type="password" name="password" placeholder="Password" required>
            <div class="options-02">
 
                <input type="submit" class="btn" name="login" value="Login">

        </div>


        </form>
        <div class="options-02">
            <br>
            <p>New User? <a href="signup.php" class="options-03"> CREATE AN ACCOUNT</a></p> <br>
            <p>Forgot Your Username? Your Username is the first two letters of your first name and last name and the last two digits of your SSN.</a>
        For example John Smith and his last 4 digits of his SSN are 1212 His Usernane would be: josm1212</p>            
            <p><a href="forgot.html" class="options-03">Forgot Your Password?</a></p>
        </div>

    </div>


</body>
</html>