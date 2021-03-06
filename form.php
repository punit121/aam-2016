<?php
 session_start();
 if ($_SESSION["email"] != "") {
   header('Location: ./signin.php');
   exit();
 }
 ?>
<html>

<head>
  <title>13th Annual Alumni Meet &middot; Logged in!</title>
  <?php include 'topHead.php'; ?>
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container-fluid">
  	<form action="form-continue.php" method="post">
      <h2> Travel Details </h2>
      <div class="form-group">
        <label for="Name">Arrival Date</label>
        <select name="arrDate" class="form-control">
        	<option>13th January 2016</option>
        	<option>14th January 2016</option>
        	<option>15th January 2016</option>
        	<option>16th January 2016</option>
        </select>
      </div>
      <div class="form-group">
        <label for="Name">Arrival Station/Airport</label>
        <input class="form-control" type="text" placeholder="CCU/Howrah/Kharagpur/Other" name="arrSt">
      </div>
      <div class="form-group">
        <label for="Name">Train/Flight Name</label>
        <input class="form-control" type="text" placeholder="Train/Flight Name" name="trainName">
      </div>
      <div class="form-group">
        <label for="Name">Train/Flight Number</label>
        <input class="form-control" type="text" placeholder="Train/Flight Number" name="trainNo">
      </div>
      <div class="form-group">
        <label for="Name">Number of Accompanying Person</label>
        <input class="form-control" type="number" placeholder="No of Accompanying Person" name="accNo">
      </div>
      <div class="form-group">
        <label for="Name">Do you require a cab?</label>
        <select name="iscab" class="form-control" onchange="checkCab(this)">
        	<option>No</option>
        	<option>Yes</option>
        </select>
      </div>
      <label for="Name">If Cab is required</label>
      <div class="form-group" style="display:none; margin-left:5%" id="ifcab">
        <label for="Name">From Where</label>
        <input class="form-control" type="text" placeholder="From where you require the cab" name="cabWhere">
        <label for="Name">At What Time</label>
        <input class="form-control" type="time" placeholder="Date and Time when the cab is required" name="cabWhen">
      </div>
      
      <hr>

      <h2> Accommodation Details </h2>
      <div class="form-group">
        <label for="Name">Number of Accompanying Person</label>
        <select class="form-control" name="accNo2" onchange="checkAcc(this)">
        	<option>0</option>
        	<option>1</option>
        	<option>2</option>
        	<option>3</option>
        </select>
      </div>
      <div class="form-group" style="display:none; margin-left:5%" id="ifacc1">
      	<label for="Name">Accompanying Persons</label><br>
      	<label for="Name">1.</label><br>
        <label for="Name">Name of Person</label>
        <input class="form-control" type="text" placeholder="Name" name="accName1">
        <label for="Name">Relationship with the Person</label>
        <input class="form-control" type="text" placeholder="Relationship" name="accRel1">
        <label for="Name">Age</label>
        <input class="form-control" type="number" placeholder="Age" name="accAge1">
      </div>
      <div class="form-group" style="display:none; margin-left:5%" id="ifacc2">
      	<label for="Name">2.</label><br>
        <label for="Name">Name of Person</label>
        <input class="form-control" type="text" placeholder="Name" name="accName2">
        <label for="Name">Relationship with the Person</label>
        <input class="form-control" type="text" placeholder="Relationship" name="accRel2">
        <label for="Name">Age</label>
        <input class="form-control" type="number" placeholder="Age" name="accAge2">
      </div>
      <div class="form-group" style="display:none; margin-left:5%" id="ifacc3">
      	<label for="Name">3.</label><br>
        <label for="Name">Name of Person</label>
        <input class="form-control" type="text" placeholder="Name" name="accName3">
        <label for="Name">Relationship with the Person</label>
        <input class="form-control" type="text" placeholder="Relationship" name="accRel3">
        <label for="Name">Age</label>
        <input class="form-control" type="number" placeholder="Age" name="accAge3">
      </div>
      <label for="Name">Preferred Alumni You want to share the room with:</label>
      <div class="form-group" style="display:block; margin-left:5%" id="ifacc0">
        <label for="Name">Name</label>
        <input class="form-control" type="text" placeholder="Name of preferred person" name="prefName">
        <label for="Name">Year of Graduation:</label>
        <input class="form-control" type="number" placeholder="Year of Graduation" name="prefYear">
        <label for="Name">Department</label>
        <input class="form-control" type="text" placeholder="Department of preferred person" name="prefDep">
        <label for="Name">Hall</label>
        <input class="form-control" type="text" placeholder="Hall pf preferred person" name="prefHall">
      </div>
      <button type="submit" class="btn btn-success btn-lg btn-block" name="button">SUBMIT</button>
    </form>

  </div>


  <script type="text/javascript">
  	function checkCab(x) {
  		if(x.options[x.selectedIndex].text=="Yes") {
  			document.getElementById("ifcab").style.display="block";
  		}
  		else {
  			document.getElementById("ifcab").style.display="none";
  		}
  	}

  	function checkAcc(x) {
  		var n=x.options[x.selectedIndex].text;
  		var y= new Array("ifacc1","ifacc2","ifacc3");
  		var i;
  		if(n>0) {
  			document.getElementById("ifacc0").style.display="none";
  		}
  		if(n==0) {
  			document.getElementById("ifacc0").style.display="block";
  		}
  		for(i=0;i<n;i++) {
  			document.getElementById(y[i]).style.display="block";
  		}
  		for(i=n;i<3;i++) {
  			document.getElementById(y[i]).style.display="none";
  		}
  	}
  </script>

</body>
</html>
