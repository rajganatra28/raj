<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset\css\style.css">
    <title>Registration Page</title>
</head>
<body>
    <h2>Registration Form</h2>
    <div class="container mt-2">
        <form action="index.php" method="POST">
            First Name:</br>
            <input type="text" class="form-control mb-2 " name="firstName" required><br><br>

            Last Name:<br>
            <input type="text" class="form-control mb-2 " name="lastName" required><br><br>

            Contact Number:<br>
            <input type="text"class="form-control mb-2" name="contactNumber" required><br><br>

            Email:<br>
            <input type="email" class="form-control mb-2" name="email" required><br><br>

            Country:<br>
            <html xmlns="http://www.w3.org/1999/xhtml">

<script type="text/javascript">
 
// State lists
var states = new Array();
states['India'] = new Array('Bihar','Delhi','Gujarat');
states['Canada'] = new Array('Alberta','British Columbia','Ontario');
states['Philippines'] = new Array('Manila','Albay','Cam-Sur');
states['United States'] = new Array('California','Florida','New York');
 
 
// City lists
var cities = new Array();

cities['India'] = new Array();
cities['India']['Bihar']          = new Array('Baisi','Bhojpur');
cities['India']['Delhi'] = new Array('Rohini','South Delhi');
cities['India']['Gujarat']          = new Array('Ahmedabad','Dhrol','Rājkot');

 
cities['Canada'] = new Array();
cities['Canada']['Alberta']          = new Array('Edmonton','Calgary');
cities['Canada']['British Columbia'] = new Array('Victoria','Vancouver');
cities['Canada']['Ontario']          = new Array('Toronto','Hamilton');
 
cities['Philippines'] = new Array();
cities['Philippines']['Manila'] = new Array('Paranaque','Quezon City');
cities['Philippines']['Albay']       = new Array('Legazpi City','Camalig');
cities['Philippines']['Cam-Sur']         = new Array('Naga','ehem');
 
cities['United States'] = new Array();
cities['United States']['California'] = new Array('Los Angeles','San Francisco');
cities['United States']['Florida']    = new Array('Miami','Orlando');
cities['United States']['New York']   = new Array('Buffalo','new York');
 
 
function setStates() {
  cntrySel = document.getElementById('country');
  stateList = states[cntrySel.value];
  changeSelect('state', stateList, stateList);
  setCities();
}
 
function setCities() {
  cntrySel = document.getElementById('country');
  stateSel = document.getElementById('state');
  cityList = cities[cntrySel.value][stateSel.value];
  changeSelect('city', cityList, cityList);
}
 
function changeSelect(fieldID, newOptions, newValues) {
  selectField = document.getElementById(fieldID);
  selectField.options.length = 0;
  for (i=0; i<newOptions.length; i++) {
    selectField.options[selectField.length] = new Option(newOptions[i], newValues[i]);
  }
}
 
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}
 
addLoadEvent(function() {
  setStates();
});
</script>
 
</head>
 
<body>
 
     <form>
        <table>
        <tr>
        <td style="text-align: left;">Country:</td>
        <td style="text-align: left;">
            <select name="country" id="country" onchange="setStates();">
            <option value="India">India</option>
            <option value="Philippines">Philippines</option>
              <option value="Canada">Canada</option>
              <option value="United States">United States</option>
            </select>
        </td>
        </tr><tr>
        <td style="text-align: left;">State:</td>
        <td style="text-align: left;">
            <select name="state" id="state" onchange="setCities();">
              <option value="">Please select a Country</option>
            </select>
        </td>
        </tr><tr>
        <td style="text-align: left;">City:</td>
        <td style="text-align: left;">
            <select name="city"  id="city">
              <option value="">Please select a Country</option>
            </select>
        </td>
        </tr>
        </table>
    </form>
 
 
 
</body>
</html>
 
 

 
            

            Address:<br>
            <textarea id="address" name="address" rows="4" cols="50" required></textarea><br><br>

            Gender:<br>
            <input type="radio" id="male" name="gender" value="male" required>
            Male
            <input type="radio" id="female" name="gender" value="female" required>
            Female
            <input type="radio" id="other" name="gender" value="other" required>
            Other<br><br>

            <input type="submit" value="Submit">
            <input type="reset" value="Clear">
        </form>
    </div>

    <script src="asset\js\script.js"></script>
</body>
</html>

<?php
    $con = mysqli_connect("localhost","root","","admin");
    if(isset($_POST['firstName']))
    {

        $fnm =$_POST['firstName'];
        $lnm =$_POST['lastName'];
        $mob=$_POST['contactNumber'];
        $email =$_POST['email'];
        $cou =$_POST['country'];
        $state =$_POST['state'];
        $city=$_POST['city'];
        $address=$_POST['address'];
        $gender=$_POST['gender'];
        $sql ="INSERT INTO `registration`(`fname`, `lname`, `cnumber`, `email`, `country`, `state`, `city`, `Address`, `gender`) VALUES ('$fnm','$lnm','$mob','$email','$cou','$state','$city','$address','$gender')";
        $res =mysqli_query($con,$sql);
    }
?>
