

<?php
    session_start();
    session_unset();
    //connect DB
    include_once("database.php");
    
    //user clicks register
    $accounttype = 'user';
    if(isset($_REQUEST['register'])){
       $firstName = strip_tags($_REQUEST['firstName']);
       $lastName = strip_tags($_REQUEST['lastName']);
       $ssn = strip_tags($_REQUEST['ssn']);

       $password = strip_tags($_REQUEST['password']);
       $confirm_password = strip_tags($_REQUEST['confirm_password']);


       $firstName = stripslashes($firstName);
       $lastName = stripslashes($lastName);
       $ssn = stripslashes($ssn);

       $password = stripslashes($password);
       $confirm_password = stripslashes($confirm_password);
    
       $firstName = mysqli_real_escape_string($connection, $firstName);
       $lastName = mysqli_real_escape_string($connection, $lastName);
       $ssn = mysqli_real_escape_string($connection, $ssn);

       $password = mysqli_real_escape_string($connection, $password);
       $confirm_password = mysqli_real_escape_string($connection, $confirm_password);
       // $password = $password;
       //$confirm_password = sha1($confirm_password);
       $username = $firstName[0].$firstName[1].$lastName[0].$lastName[1].$ssn;
       strtolower("$username");

       $SQL_Select = "SELECT Username FROM user_tbl WHERE Username = '$username'";

       if(mysqli_num_rows(mysqli_query($connection, $SQL_Select))){
           echo "Account Already exists";

       }elseif($password != $confirm_password) {
        echo "<div class='notice-2'><br>Incorrect Password.</div>";
       }elseif(empty($firstName) || empty($lastName) || empty($ssn) || empty($password)|| empty($confirm_password))
        {
                echo "<script>alert('Please Fill All of the Fields. $ssn ')</script>";
        //}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          //s      echo "Please enter a valid email";
            }else{
                $SQL_insert = "INSERT INTO user_tbl(`FirstName`, `LastName`, `Username`,  `Password`, `Account_Type`) VALUES ('$firstName','$lastName','$username','$password', '$accounttype')";  

                if(mysqli_query($connection, $SQL_insert)){                
                //echo "<script>alert('Your Profile Has Been Created')</script>";
                echo "<div class='notice-2'><br>Your Profile has been Created.... redirecting to Login Page</div>";
                header("refresh: 1; url=index.php");
                 }else{
                    echo "<script>alert('Your Profile Was Not Created.')</script>";
                    }

    }

    mysqli_close($connection);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="font-awesome/css/all.css">
    <link rel="stylesheet" href="css/style2.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>PD Registrant Signup</title>
</head>
<body>



    <div class="form">    <div class="title">
        <p>New S.O. Registrant</p>
    </div>
        <!-- sign up form starts-->
        <form action="" class="login-form" method="POST">
            <i class="fa fa-user-plus"></i>
            <input class="user-input" type="text"  name="firstName" placeholder="First Name" required>
            <input class="user-input" type="text"  name="lastName" placeholder="Last Name" required>
            <input type="text" class="user-input" name="ssn" placeholder="Last 4 digits of your SSN" required>


            <input type="password" class="user-input" name="password" placeholder="Password" required>
            <input type="password" class="user-input"   name="confirm_password" placeholder="Confirm Password" required>

            <input type="submit" class="btn" value="Sign Up" name ="register">
        <div class="options-02">
            <br>
            <p>Already Registered? <a href="index.php" class="options-03">LOGIN</a></p>
            <br><br>

        </form>
    </div>
    <div >  <p class="notice">NOTICE: This webite is only for submitting updates to your file. 
                 You will receive an email 
            when your updates have been added to your file, but submit an update with your mail address FIRST.
        For any other inquiries, call the main number listed on the main website. </p></div>
        </div>

</script>
</body>
</html>