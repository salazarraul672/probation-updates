<?php
 include('header.php');
include_once("database.php");


?>
<div class= "features1">
    <?php

                $addemployerAR = [];
                $updateemployerAR= [];
                $addvehicleAR = [];
                $updatevehicleAR=[];
                $updatehomeaddressAR=[];
                $removevehicleAR = [];
                $addusernameAR = [];
                $addwebsiteAR = [];
                $websitestoadd =0;
                $temp = 1;
                $website ="";
                $username ="";    
                  echo $userid;  

                  $SQL_INSERT_UPDATES = "INSERT INTO updates_tbl(`User_ID`, `Status`) VALUES ('$userid','Pending')";  
                  mysqli_query($connection, $SQL_INSERT_UPDATES);
                  $last_ID_UPDATES = mysqli_insert_id($connection);  
                  
                foreach($_GET as $key=>$value){
                   // echo " The value is key is $key =$value <br>";
                    if($value !="" ){
                       //echo "<br>$key = $value <br>";
                       $SQL_INSERT_UPDATES_DETAIL ="";
                        if($key == "addvehicleyear"  || $key == "addvehiclemake" || $key == "addvehiclemodel" || $key == "addvehiclecolor" || $key == "addvehicletags" ){
                                array_push($addvehicleAR, "$value");
                                
                                if (count($addvehicleAR) == 5){
                                echo "<br><br>Additional Vehicle Info is Below:<br>";
                                print_r($addvehicleAR);
                            echo "<br>";
                            $SQL_insert_vehicle = "INSERT INTO vehicle_tbl(`User_ID`, `Make`, `Model`,  `Color`, `Year`, `Tags`, `Status` ) VALUES ('$userid','$addvehicleAR[0]','$addvehicleAR[1]','$addvehicleAR[2]','$addvehicleAR[3]', '$addvehicleAR[4]', 'Active')";  
                           
                            if(mysqli_query($connection, $SQL_insert_vehicle)){                
                                //echo "<script>alert('Your Profile Has Been Created')</script>";
                                echo "<div class='notice-2'><br>Vehicle has been added.... redirecting to Login Page</div>";
                                header("refresh: 1; url=home.php");
                                 }else{
                                    echo "<script>alert('Your Profile Was Not Created.</script>".mysqli_error($connection);
                                    }
                            }
                            }

                            elseif($key == "updatevehicleyear"  || $key == "updatevehiclemake" || $key == "updatevehiclemodel" || $key == "updatevehiclecolor" || $key == "updatevehicletags" ){
                                array_push($updatevehicleAR, "$value");
                                        
                                if (count($updatevehicleAR) == 5){
                                echo "<br><br>Primary Vehicle Info is Below:<br>";
                                print_r($updatevehicleAR);
                            echo "<br><br>";
                            }
                            }

                            elseif($key == "updatetreetaddress" || $key == "updatetreetaddress2" || $key == "updatecity" || $key == "updatestate"  || $key == "updatezip" || $key == "updatecounty"){
                                array_push($updatehomeaddressAR, "$value");
                                    
                                if (count($updatehomeaddressAR) == 6){
                                    echo "New Home Address Info is Below:<br>";
                                    print_r($updatehomeaddressAR);
                                
                                    }
                            }
                            elseif($key == "removevehicleyear" || $key == "removevehiclemake" || $key == "removevehiclemodel" ||$key == "removevehiclecolor"){
                                array_push($removevehicleAR, "$value");
                                    
                                if (count($removevehicleAR) == 4){
                                echo "Remove Vehicle Info is Below:<br>";
                                print_r($removevehicleAR); 
                                }

                            }
                            elseif($key == "updatehomephone"){
                            

                                $SQL_INSERT_UPDATES_DETAIL = "INSERT INTO updates_detail_tbl( `Update_Item_ID`, `Updates_ID`, `Update_Action_ID`) VALUES ('2','$last_ID_UPDATES','8')";
                                $last_ID_UPDATES = mysqli_insert_id($connection);                                 
                                $SQL_INSERT_MOBILE = "INSERT INTO mobile_phone_tbl(`Mobile_Phone`,`Update_Item_ID`,`Update_Detail_ID`,`Status`) VALUES ('$value','$userid','5','$last_ID_UPDATES','Current')"; 

                                mysqli_query($connection, $SQL_INSERT_MAIL);
                                echo "Last Insert ID was FOR Mobile: $last_ID_UPDATES";  

                                echo "<br>Update Home Phone<br>";
                                echo "$value <br><br>";
                                }
                            elseif($key == "removehomephone"){
                                echo "<br>Remove Home Phone<br>";
                                echo "$value <br><br>";
                                }
                            elseif($key == "updatemobilephone"){
                
                                $SQL_INSERT_UPDATES_DETAIL = "INSERT INTO updates_detail_tbl( `Update_Item_ID`, `Updates_ID`, `Update_Action_ID`) VALUES ('5','$last_ID_UPDATES','2')";
                                mysqli_query($connection, $SQL_INSERT_UPDATES_DETAIL);
                                $last_ID_UPDATES = mysqli_insert_id($connection);                                 
                                $SQL_INSERT_MOBILE = "INSERT INTO mobile_phone_tbl(`Mobile_Phone`,`User_ID`, `Update_Item_ID`,`Update_Detail_ID`,`Status`) VALUES ('$value','$userid','5','$last_ID_UPDATES','Current')"; 
                                mysqli_query($connection, $SQL_INSERT_MOBILE);
                                echo "Last Insert ID was FOR Mobile: $last_ID_UPDATES"; 
                                echo "<br>Update Mobile Phone as $value <br>";
                                echo "$value <br><br>";
                                    }
                            elseif($key == "addmobilephone"){
                                $SQL_INSERT_UPDATES_DETAIL = "INSERT INTO updates_detail_tbl( `Update_Item_ID`, `Updates_ID`, `Update_Action_ID`) VALUES ('5','$last_ID_UPDATES','3')";
                                mysqli_query($connection, $SQL_INSERT_UPDATES_DETAIL);
                                $last_UPDATES_DETAIL = mysqli_insert_id($connection);  
                                $SQL_INSERT_ADD_MOBILE ="INSERT INTO mobile_phone_tbl(`Mobile_Phone`,`User_ID`, `Update_Item_ID`,`Update_Detail_ID`,`Status`) VALUES ('$value','$userid','5','$last_UPDATES_DETAIL','Current')"; 
                                mysqli_query($connection, $SQL_INSERT_ADD_MOBILE);
                                echo "<br>An UPDATE to ADD an additional Mobile Phone as been created.<br>";
                                echo "$value <br><br>";
                                    }
                            elseif($key == "removemobilephone"){
                                $SQL_INSERT_UPDATES_DETAIL = "INSERT INTO updates_detail_tbl( `Update_Item_ID`, `Updates_ID`, `Update_Action_ID`) VALUES ('5','$last_ID_UPDATES','4')";
                                mysqli_query($connection, $SQL_INSERT_UPDATES_DETAIL);
                                $last_UPDATES_DETAIL = mysqli_insert_id($connection);  
                                $SQL_INSERT_REMOVE_MOBILE ="INSERT INTO mobile_phone_tbl(`Mobile_Phone`,`User_ID`, `Update_Item_ID`,`Update_Detail_ID`,`Status`) VALUES ('$value','$userid','5','$last_UPDATES_DETAIL','Inactive')"; 
                                mysqli_query($connection, $SQL_INSERT_REMOVE_MOBILE);
                                echo "<br>AN UPDATE To Remove a Mobile Phone has been created.<br>";
                                echo "$value <br><br>";
                                        }
           

                            elseif($key == "updateemployername"  || $key == "updateemployerstreet" || $key == "updateemployerstreet2" || $key == "updateemployercity" || $key == "updateemployerstate"  || $key == "updateemployerzip" || $key == "updateemployerphone"){
                                array_push($updateemployerAR, "$value");
                                       
                                 if (count($updateemployerAR) == 7){
                                    $SQL_INSERT_UPDATES_DETAIL = "INSERT INTO updates_detail_tbl( `Update_Item_ID`, `Updates_ID`, `Update_Action_ID`) VALUES ('7','$last_ID_UPDATES','10')";
                                    mysqli_query($connection, $SQL_INSERT_UPDATES_DETAIL);
                                    $last_UPDATES_DETAIL = mysqli_insert_id($connection);                                      
                                    $SQL_INSERT_UPDATE_EMPLOYER = "INSERT INTO employer_tbl(`User_ID`,`Employer_Name`,`Address`, `Address2`,`city`,`state`,`zip`,`phone`,`Status`,`Update_Item_ID`) VALUES ('$userid','$updateemployerAR[0]','$updateemployerAR[1]','$updateemployerAR[2]','$updateemployerAR[3]','$updateemployerAR[4]','$updateemployerAR[5]','$updateemployerAR[6]','Current','7')";
                                    mysqli_query($connection, $SQL_INSERT_UPDATE_EMPLOYER);
                                    
                                    echo "<br>An UPDATE To update your primary employer has been created.<br>";
                                    echo "<br><br>";
                                
                                }
                            }

                            elseif($key == "addemail"){

                                $datetime = date("M-d-Y h:i:s A");                             
                                        $SQL_INSERT_UPDATES_DETAIL = "INSERT INTO updates_detail_tbl( `Update_Item_ID`, `Updates_ID`, `Update_Action_ID`) VALUES ('2','$last_ID_UPDATES','8')";
                                        mysqli_query($connection, $SQL_INSERT_UPDATES_DETAIL);
                                        $last_ID_UPDATES = mysqli_insert_id($connection); 
                                        $SQL_INSERT_MAIL = "INSERT INTO email_tbl(`email`,`User_ID`,`Update_Item_ID`,`Update_Detail_ID`,`Status`) VALUES ('$value','$userid','2','$last_ID_UPDATES','Current')"; 
                                        mysqli_query($connection, $SQL_INSERT_MAIL);
                                        echo "<br>An UPDATE to Add an Additional Email Acct.: $value has been created.<br><br>";                                      

                                }// addemail IF

                            elseif($key == "updateprimaryemail"){
                                $SQL_INSERT_UPDATES_DETAIL = "INSERT INTO updates_detail_tbl( `Update_Item_ID`, `Updates_ID`, `Update_Action_ID`) VALUES ('2','$last_ID_UPDATES','7')";
                                mysqli_query($connection, $SQL_INSERT_UPDATES_DETAIL);
                                $last_ID_UPDATES = mysqli_insert_id($connection); 
                                $SQL_INSERT_PRIMARY_MAIL = "INSERT INTO email_tbl(`email`,`User_ID`,`Update_Item_ID`,`Update_Detail_ID`,`Status`) VALUES ('$value','$userid','2','$last_ID_UPDATES','Current')"; 
                                mysqli_query($connection, $SQL_INSERT_PRIMARY_MAIL);
                                echo "<br>An UPDATE to Update Your Primary Email Acct.: $value has been created.<br><br>";                                      
                                echo "<br><br>";
                                // copy and paste this section just change the updateaction and the second mysqli_query
                             }
                            elseif($key == "removeemail"){
                                $SQL_INSERT_UPDATES_DETAIL = "INSERT INTO updates_detail_tbl( `Update_Item_ID`, `Updates_ID`, `Update_Action_ID`) VALUES ('2','$last_ID_UPDATES','9')";
                                mysqli_query($connection, $SQL_INSERT_UPDATES_DETAIL);
                                $last_ID_UPDATES = mysqli_insert_id($connection); 
                                $SQL_INSERT_REMOVE_MAIL = "INSERT INTO email_tbl(`email`,`User_ID`,`Update_Item_ID`,`Update_Detail_ID`,`Status`) VALUES ('$value','$userid','2','$last_ID_UPDATES','Old')"; 
                                mysqli_query($connection, $SQL_INSERT_REMOVE_MAIL);
                                echo "<br>An UPDATE to Remove an Email Acct.: $value has been created.<br><br>";                                      
                                echo "$value <br><br>";
                            }

                            elseif($key == "addemployername"  || $key == "addemployerstreet" || $key == "addemployerstreet2" || $key == "addemployercity" || $key == "addemployerstate"  || $key == "addemployerzip" || $key == "addemployerphone"){
                                array_push($addemployerAR, "$value");
                                       
                                 if (count($addemployerAR) == 7){
                                    $SQL_INSERT_UPDATES_DETAIL = "INSERT INTO updates_detail_tbl( `Update_Item_ID`, `Updates_ID`, `Update_Action_ID`) VALUES ('7','$last_ID_UPDATES','11')";
                                    mysqli_query($connection, $SQL_INSERT_UPDATES_DETAIL);
                                    $last_UPDATES_DETAIL = mysqli_insert_id($connection);                                      
                                    $SQL_INSERT_ADD_EMPLOYER = "INSERT INTO employer_tbl(`User_ID`,`Employer_Name`,`Address`, `Address2`,`city`,`state`,`zip`,`phone`,`Status`,`Update_Item_ID`) VALUES ('$userid','$addemployerAR[0]','$addemployerAR[1]','$addemployerAR[2]','$addemployerAR[3]','$addemployerAR[4]','$addemployerAR[5]','$addemployerAR[6]','Current','7')";
                                    mysqli_query($connection, $SQL_INSERT_ADD_EMPLOYER);
                                    
                                    echo "<br>An UPDATE To ADD an employer: $addemployerAR[0] has been created.<br>";
                                    echo "<br><br>";
                                
                                }
                            }
                            elseif($key == "removeemployername"){

                                echo "<br>Employer Name to Remove<br>";
                                echo "$value <br><br>";
                            }
                            elseif($key == "comment"){
                                echo "<br>Comments or Questions<br>";
                                echo "$value <br><br>";
                            }
                            elseif($key == "requestappt"){
                                echo "<br>$firstName $lastName wants to request an in person appointment.<br>";
                                echo "$value <br><br>";
                            }
                            elseif($key == "removesocial"){
                                echo "<br>Mr. $lastName wants to remove the following website:<br>";
                                echo "$value <br><br>";
                            }
                            /*elseif($key == "websitestoadd"){
                                $websitestoadd= $value;
                                   echo " ++$websitestoadd<br>";
                                    echo "addwebsite".$websitestoadd;
                                    echo "adduser".$websitestoadd;
                                 if($key == "addwebsite".$websitestoadd){
                                    echo "<br>$value $key<br>";
                                 }
                                    //addwebsite addusername
                            } */
      
                     }else{
                 
                   echo "<br>Some or All values are empty. Please Fill out the form completely.";
                    break;
                     }

                 } 

/* second time going through $_GET  */


              foreach($_GET as $key=>$value){
                         //echo "$key = $value <br>";  
                        $username = "addusername".$temp;
                        $website = "addwebsite".$temp;
                       // echo "$website <br> $key";
                        //echo "$username<br> $key = $value";

                        if($key == $website){
                            //echo "$value y <br>";  
                            //echo "addwebsite".$temp."= ".$value."<br>"; 
                            array_push($addwebsiteAR, "$value");
                            $temp++; 
                    }                   

                }
                    $temp = 1;


                    foreach($_GET as $key=>$value){
                        //echo "$key = $value <br>";  
                       $username = "addusername".$temp;
                       $website = "addwebsite".$temp;
                      // echo "$website <br> $key";
                       //echo "$username<br> $key = $value";
                        
                   if( $key == $username ){
                       array_push($addusernameAR, "$value");
                         //echo "$value y <br>";  
                       //echo "addwebsite".$temp."= ".$value."<br>"; 

                       $temp++; 
                   }}

                   
              