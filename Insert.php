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
            <select id="country" name="country" required onchange="populateStates()">
                <option value="" disabled selected>Select Country</option>
                <option value="India">India</option>
                <option value="Canada">Canada</option>
                <option value="UK">UK</option>
                <option value="Australia">Australia</option>
                <option value="USA">USA</option>
            </select><br><br>

            State:<br>
            <select id="state" name="state" required onchange="populateCities()">
                <option value="" disabled selected>Select State</option>
            </select><br><br>

            City:<br>
            <select id="city" name="city" required >
                <option value="" disabled selected>Select City</option>
            </select><br><br>

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
