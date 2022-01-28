<?php include('header.php');
include('myfucntions.php'); ?>

<div class="features">
<div class="features1">
    <h4>Enter the infomation below that needs to be updated in your file.</h4>
    </div> 
    <form action="insertupdate.php" method="get">

    <div class="features-inner">


                <?php

            if(empty($_GET)){
                echo "<div><h3> You did not select any fields in the previous page. Please go back to previous page.</div>";
                
            }else{
                foreach($_GET as $key=>$value){
                       // echo "$key $value";
                    if($value !="" ){
                    ?><div class="featured-item">  <?php  
                        switch ($key) {

                            case "addvehicle":
                                    ?>
                            <br>
                            <h5>Add a Vehicle:First or Any Additional Vehicles.</h5> <hr>
                            <label for="<?php $value?>" class="form-label">Year</label>
                            <input type="text" class="form-control" id="addvehicleyear" name ="addvehicleyear"> 
                            <label for="<?php $value?>" class="form-label">Make</label>
                            <input type="text" class="form-control" id="addvehiclemake" name ="addvehiclemake">
                            <label for="<?php $value?>" class="form-label">Model</label>
                            <input type="text" class="form-control" id="addvehiclemodel" name ="addvehiclemodel"> 
                            <label for="<?php $value?>" class="form-label">Color</label>
                            <input type="text" class="form-control" id="addvehiclecolor" name ="addvehiclecolor">
                            <label for="<?php $value?>" class="form-label">Tags</label>
                            <input type="text" class="form-control" id="addvehicletags" name ="addvehicletags">
                                    <?php

                            break;
                            case "updatevehicle":
                                ?>
                        <br>
                        <h5>Update A Vehicle: If you have access to only one.</h5> <hr>
                        <label for="<?php $value?>" class="form-label">Year</label>
                        <input type="text" class="form-control" id="updatevehicleyear" name ="updatevehicleyear"> 
                        <label for="<?php $value?>" class="form-label">Make</label>
                        <input type="text" class="form-control" id="updatevehiclemake" name ="updatevehiclemake">
                        <label for="<?php $value?>" class="form-label">Model</label>
                        <input type="text" class="form-control" id="updatevehiclemodel" name ="updatevehiclemodel"> 
                        <label for="<?php $value?>" class="form-label">Color</label>
                        <input type="text" class="form-control" id="updatevehiclecolor" name ="updatevehiclecolor">
                        <label for="<?php $value?>" class="form-label">Tags</label>
                        <input type="text" class="form-control" id="updatevehicletags" name ="updatevehicletags">
                                <?php

                            break;
                            case "removevehicle":
                                ?>
                        <br>
                        <h5>Deregister a Vehicle </h5> <hr>
                        <label for="<?php $value?>" class="form-label">Year</label>
                        <input type="text" class="form-control" id="removevehicleyear" name ="removevehicleyear"> 
                        <label for="<?php $value?>" class="form-label">Make</label>
                        <input type="text" class="form-control" id="removevehiclemake" name ="removevehiclemake">
                        <label for="<?php $value?>" class="form-label">Model</label>
                        <input type="text" class="form-control" id="removevehiclemodel" name ="removevehiclemodel"> 
                        <label for="<?php $value?>" class="form-label">Color</label>
                        <input type="text" class="form-control" id="removevehiclecolor" name ="removevehiclecolor">

                                <?php

                            break;
                            case "updateaddress":
                                    ?>
      
                            <br>    
                            <h5>New Current Address</h5> <hr>
                            <label for="<?php $value?>" class="form-label">Street Address</label>
                            <input type="text" class="form-control" id="updatestreetaddress" name ="updatetreetaddress">
                            <label for="<?php $value?>" class="form-label">Street Address 2</label>
                            <input type="text" class="form-control" id="updatestreetaddress2" name ="updatetreetaddress2">

                            <label for="<?php $value?>" class="form-label">City</label>
                            <input type="text" class="form-control" id="updatecity" name ="updatecity">

                            <label for="<?php $value?>" class="form-label">State</label>
                            <input type="text" class="form-control" id="updatestate" name ="updatestate">  

                            <label for="<?php $value?>" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="updatezip" name ="updatezip">  

                            <label for="<?php $value?>" class="form-label">County</label>
                            <input type="text" class="form-control" id="updatecounty" name ="updatecounty">  
                              
                                    <?php
                            break;
                            case "updateprimaryemail":
                                    ?>

                                    
                            <br>    
                            <h5>Update Primary Email Account</h5> <hr>
                            <label for="<?php $value?>" class="form-label">Email Account to Update</label>
                            <input type="text" class="form-control" id="updateprimaryemail" name ="updateprimaryemail">
                            <?php
                            break;
                            case "addemail":
                                    ?>

                                    
                            <br>    
                            <h5>Add an Additional Email Account</h5> <hr>
                            <label for="<?php $value?>" class="form-label">Add Email Address</label>
                            <input type="text" class="form-control" id="addemail" name ="addemail">
                            
                            <?php

                            break;
                            case "removeemail":
                                    ?>

                                    
                            <br>    
                            <h5>Remove Email Account</h5> <hr>
                            <label for="<?php $value?>" class="form-label">Enter Email to Remove</label>
                            <input type="text" class="form-control" id="removeemail" name ="removeemail">
                            
                            <?php

                            break;
                            case "updatehomephone":
                                    ?>

                                    
                            <br>    
                            <h5>Update Home Phone Number</h5> <hr>
                            <label for="<?php $value?>" class="form-label">Enter New Home Phone Number</label>
                            <input type="text" class="form-control" id="updatehomephone" name ="updatehomephone">
                            <?php

                                break;
                                case "removehomephone":
                                        ?>

                                        
                                <br>    
                                <h5>Remove Phone Number</h5> <hr>
                                <label for="<?php $value?>" class="form-label">Enter Home Phone Number to Remove</label>
                                <input type="text" class="form-control" id="homephone" name ="removehomephone">
                            <?php
                            break;
                            case "updatemobilephone":
                                    ?>

                                    
                            <br>    
                            <h5>Update Mobile Phone Number</h5> <hr>
                            <label for="<?php $value?>" class="form-label">Enter New Mobile Phone Number</label>
                            <input type="text" class="form-control" id="mobilephone" name ="updatemobilephone">
                            <?php
                            break;
                            case "addmobilephone":
                                    ?>

                                    
                            <br>    
                            <h5>Add Additional Mobile Phone Number</h5> <hr>
                            <label for="<?php $value?>" class="form-label">Enter New Mobile Phone Number</label>
                            <input type="text" class="form-control" id="addmobilephone" name ="addmobilephone">
                            <?php
                            break;
                            case "removemobilephone":
                                    ?>   
                            <br>    
                            <h5>Remove Mobile Phone Number</h5> <hr>
                            <label for="<?php $value?>" class="form-label">Enter Mobile Number to Remove</label>
                            <input type="text" class="form-control" id="removemobilephone" name ="removemobilephone">

                            <?php

                           break;
                            case "updateemployer":
                                    ?>

                                    
                            <br>    
                            <h5>Employer Information</h5> <hr>
                            <label for="<?php $value?>" class="form-label">Name of Current Main Employer</label>
                            <input type="text" class="form-control" id="updateemployer" name ="updateemployername">
                            <label for="<?php $value?>" class="form-label">Street Address</label>
                            <input type="text" class="form-control" id="updateemployerstreet" name ="updateemployerstreet">
                            <label for="<?php $value?>" class="form-label">Street Address 2</label>
                            <input type="text" class="form-control" id="updateemployerstreet2" name ="updateemployerstreet2">

                            <label for="<?php $value?>" class="form-label">City</label>
                            <input type="text" class="form-control" id="updateemployercity" name ="updateemployercity">

                            <label for="<?php $value?>" class="form-label">State</label>
                            <input type="text" class="form-control" id="updateemployerstate" name ="updateemployerstate">  

                            <label for="<?php $value?>" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="updateemployerzip" name ="updateemployerzip"> 
                            <label for="<?php $value?>" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="updateemployerphone" name ="updateemployerphone"> 

                            <?php

                           break;
                            case "addemployer":
                                    ?>

                                    
                            <br>    
                            <h5>Additional Employer Information</h5> <hr>
                            <label for="<?php $value?>" class="form-label">Name of Employer To Add</label>
                            <input type="text" class="form-control" id="addemployername" name ="addemployername">
                            <label for="<?php $value?>" class="form-label">Street Address</label>
                            <input type="text" class="form-control" id="addemployerstreet" name ="addemployerstreet">
                            <label for="<?php $value?>" class="form-label">Street Address 2</label>
                            <input type="text" class="form-control" id="addemployerstreet2" name ="addemployerstreet2">

                            <label for="<?php $value?>" class="form-label">City</label>
                            <input type="text" class="form-control" id="addemployercity" name ="addemployercity">

                            <label for="<?php $value?>" class="form-label">State</label>
                            <input type="text" class="form-control" id="addemployerstate" name ="addemployerstate">  

                            <label for="<?php $value?>" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="addemployerzip" name ="addemployerzip"> 

                            <label for="<?php $value?>" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="addemployerphone" name ="addemployerphone"> 
                            
                            <?php

                           break;
                           case "removeemployer":
                                   ?>
                           <br>    
                           <h5>Remove Employer</h5> <hr>
                           <label for="<?php $value?>" class="form-label">Name of Employer To Remove<?php $key?></label>
                           <input type="text" class="form-control" id="removejob" name ="removeemployername">
                           <?php

                           break;
                           case "removesocial":
                                   ?>

                           <br>    
                           <h5>Remove Website</h5> <hr>
                           <label for="<?php $value?>" class="form-label">Name of Website to Remove</label>
                           <input type="text" class="form-control" id="removesocial" name ="removesocial">


                           <?php
                           break;

                           case "websites":
                            if($value == ''){
                                echo "</div>";
                                break;
                            }else{
                                echo "<br><h5>Websites to Regsiter: $value </h5><hr><br>";?>
                        <input type="hidden" id="referer" name="websitestoadd" value="<?php echo $value; ?>">
                       
                        <?php
                            for ($x = 1; $x <= $value; $x++) {
                            ?>

                           <label for="<?php $value?>" class="form-label">Name of Website <?php echo $x; ?></label>
                           <input type="text" class="form-control" id="website<?php $x; ?>" name =<?php echo "addwebsite".$x; ?>>

                           <label for="<?php $value?>" class="form-label"><?php $x; ?>Username for Website <?php echo $x; ?>: </label>
                           <input type="text" class="form-control" id="username<?php $x; ?>" name =<?php echo "addusername".$x; ?> >  
                           <hr><br> 
                           <input type="hidden" id="referer" name="websitestoadd" value="<?php echo $value; ?>">
                       
                           <?php
                            }
                        }

                        break;
                        case "comment":
                                ?>

                        <br>    
                        <h5>Enter any comments or questions below:</h5> <hr>
                        <label for="<?php $value?>" class="form-label">Enter Any Comments Below:</label>
                        <input type="text" class="form-control" id="comment" name ="comment">
                        <?php
                        break;
                        case "requestappt":
                               

                            ?>
                             <br>    
                        <h5>Request Appointment:</h5> <hr>
                        <label for="<?php $value?>" class="form-label">Enter type of Appointment below. Yearly, Quarterly, Monthly, etc.</label>
                        <input type="text" class="form-control" id="requestappt" name ="requestappt">
                            <?php
                }//switch statement                          
                        ?>
                    
                      </div>  
                <?php
                }else{
                    break;
                }
            }
        }//main if
                ?>


</div> 
<div class="features1"><input class="btn btn-warning" type="submit" value="Submit Updates"></div> 
</form>
 
 </div></div>
<script src="css/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>