<?php include('header.php');
 ?>


<div class="features">
       <div class="features1">
    <h5>Select items below to update in your file.</h5>
    </div> 
<form action="chooseupdate.php" method="get">

  <div class="features-inner">

    <div class="featured-item">
      <h3>Home Address</h3>
      <hr>
      <input type="checkbox"  id="updateaddress" name="updateaddress" value="updateaddress">
     <label for="address" class="form-label" >Update Home Address</label>
    </div>

    <div class="featured-item">
      <h3>Phone Numbers  </h3>
      <hr>
      <input type="checkbox"  id="mobilephone" name="updatemobilephone" value="updatemobilephone">
     <label for="mobilephone" class="form-label" >UPDATE Primary Mobile Phone Number</label>
     <br>
     <input type="checkbox"  id="Mobilephone" name="addmobilephone" value="addmobilephone">
     <label for="homephone" class="form-label" >ADD An Additional Mobile Phone Number</label>
     <br>
     <input type="checkbox"  id="homephone" name="removemobilephone" value="removemobilephone">
     <label for="homephone" class="form-label" >REMOVE Mobile Phone Number</label>
     <br>
     <hr>
     <input type="checkbox"  id="homephone" name="updatehomephone" value="updatehomephone">
     <label for="homephone" class="form-label" >UPDATE Home Phone Number</label>
     <br>
     <input type="checkbox"  id="homephone" name="removehomephone" value="removehomephone">
     <label for="homephone" class="form-label" >REMOVE Home Phone Number</label>
    </div>

    <div class="featured-item">
      <h3>Email Accounts</h3>
      <hr>
      <input type="checkbox"  id="email1" name="updateprimaryemail" value="updateprimaryemail">
     <label for="email1" class="form-label" >UPDATE Your Primary Email Account</label>
    <br>
      <input type="checkbox"  id="email1" name="addemail" value="addemail">
     <label for="email1" class="form-label" >ADD An ADDITIONAL Email Account</label>
    <br>
     <input type="checkbox"  id="email2" name="removeemail" value="removeemail">
     <label for="email2" class="form-label" >REMOVE Email Account</label>
    </div>

    <div class="featured-item">
      <h3>Employment</h3>
      <hr>
      <input type="checkbox"  id="job1" name="updateemployer" value="updateemployer">
     <label for="updateemployer" class="form-label" >UPDATE Employer</label>
    <br>
     <input type="checkbox"  id="otherjob" name="addemployer" value="addemployer">
     <label for="otherjob" class="form-label" >ADD Employer</label>
     <br>
     <input type="checkbox"  id="removeemployer" name="removeemployer" value="removeemployer">
     <label for="removeemployer" class="form-label" >REMOVE Employer</label>
    </div>
    <div class="featured-item">
    <h3>Vehicles</h3><hr>

     <input type="checkbox"  id="addvehicle" name="addvehicle" value="ADD A Vehicle">
     <label for="addvehicle" class="form-label" >ADD Vehicle</label>
     <br>
     <input type="checkbox"  id="updatevehicle" name="updatevehicle" value="UPDATE A Vehicle">
     <label for="updatevehicle" class="form-label"> UPDATE Vehicle</label>
     <br>
     <input type="checkbox"  id="removevehicle" name="removevehicle" value="REMOVE A Vehicle">
     <label for="removevehicle" class="form-label" >REMOVE a Vehicle</label>
    </div>

    <div class="featured-item">
    <h3>Websites to Remove:</h3><hr>

     <input type="checkbox"  id="removesocial" name="removesocial" value="Remove Social Media Account">
     <label for="removesocial" class="form-label" > Unregister A Website.</label>
     <p>Select this box to unregister any website that you have previously registered.</p>
    </div>

    <div class="featured-item">
      <h3>Comment/Question</h3><hr>
      <input type="checkbox"  id="comment" name="comment" value="comment">
     <label for="comment" class="form-label" >ADD Comment/Question</label><br>
     <input type="checkbox"  id="requestappt" name="requestappt" value="Request Appointment for...">
     <label for="comment" class="form-label" >REQUEST Appointment</label>
    </div>

        <div class="featured-item">
        <h3>Register Your Websites</h3><hr>
                    <label for="websites">How Many Websites Do You want To Register?</label>

                    <select name="websites" id="websites">

                    <option value="">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>    
                    </select>
        </div>  
  <br><br>

  </div><!-- features -->
  <div class="features1"><input type="reset" value=" Clear Form"> </div>

<div class="features1"> <input class="btn btn-warning" type="submit" value="Continue"></div>


</form>


 
  </div>
</div>
<script src="css/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>