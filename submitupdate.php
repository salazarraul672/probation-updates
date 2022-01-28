<?php include('header.php'); ?>

<div class="hero">
      <div class="content" id="maincontent">
      <form class="row g-3">

    <div class="hero-inner">
      <div><h3>Home Address</h3></div>
     
        <label for="inputAddress" class="form-label">Enter Your Home New Address(Including Apt#, City, State and Zip Code)</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
     
    </div>
    <div class="hero-inner">
  <div><h3>Email Adresses</h3></div>
 
    <label for="inputEmail4" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="inputEmail4">


    <label for="inputEmail4" class="form-label">Add A Second or Additional Email Address(Other Email Accounts)</label>
    <input type="email" class="form-control" id="inputEmail5">

    <label for="removeEmail4" class="form-label">Remove an Email Address(Other Email Accounts)</label>
    <input type="email" class="form-control" id="inputEmail5">
</div>

<div class="hero-inner">
  <div><h3>Phone Numbers</h3></div>
  <div class="col-md-6">
    <label for="inputphone1" class="form-label">New Phone Number</label>
    <input type="text" class="form-control" id="phone1">
  </div>
  <div class="col-md-4">
    <label for="inputphome2" class="form-label">Add A Second Or Additional Phone Number</label>
    <input type="text" class="form-control" id="phone2">
  </div>
</div>
<div class="hero-inner">
  <div><h3>Employment</h3></div>
  
    <label for="jobAddress1" class="form-label">New Employer Address</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="New Employer Address">
 
  <div class="col-8">
    <label for="jobAddress2" class="form-label">Add a second employer or an additional employer address</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="New Employer Address">
  </div>
</div>
<div class="hero-inner">
  <div><h3>Vehicles</h3></div>

  <div class="col-md-6" >
    <label for="inputvehicle1" class="form-label">Main Vehicle(Include: Year, Color, Make, Model)</label>
    <input type="text" class="form-control" id="inputvehicle1" placeholder="Year, Make, Model, Color">
  </div>

  <div class="col-md-4">
    <label for="tagsvehicle1" class="form-label">Main Vehicle Tags</label>
    <input type="text" class="form-control" id="inputvehicle1" placeholder="Tags for Vehicle 1">
  </div>
  <div class="col-md-6">
    <label for="inputvehicle2" class="form-label">Second Vehicle or Additional Vehicle(Include: Year, Color, Make, Model)</label>
    <input type="text" class="form-control" id="inputvehicle2" placeholder="Year, Make, Model, Color">
  </div>
  <div class="col-md-4">
    <label for="tagsvehicle2" class="form-label">Second or Additional Vehicle Tags</label>
    <input type="text" class="form-control" id="inputvehicle2" placeholder="Tags for Vehicle 2">
  </div>
</div>
<div class="hero-inner">
 <div>  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> I have a bike</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> I have a car</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> I have a boat</label><br><br>
</div>
  <div class="col-12">
    <button type="submit" class="btn btn-warning">Submit Updates</button>
  </div>


 




</form>

</div>

<script src="css/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>