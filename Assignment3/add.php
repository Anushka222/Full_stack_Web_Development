<?php
include_once('config.php');
?>

<?php
if(isset($_POST['submit'])){   
     $username=$_POST['username'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $sql="INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
    mysqli_query($conn,$sql);
    }
else{
    echo "CLICK THE SUBMIT BUTTON";
}

?>
<html>
<head>
<title>FORM</title>
</head>
<body>
<form method='POST' action='add.php'>
        Username <input type="text" name="username" placeholder="ENTER USERNAME" required><br>
        E-Mail <input type="email" name="email" placeholder="ENTER VALID EMAIL" required><br>
        <label>Gender- </label>
    male<input type="radio" name="gender" value="male" required>
    female<input type="radio" name="gender" value="female" required><br>
        City <select name="city" class="margin">
            <option value="dehradun">DEHRADUN</option>
            <option value="almora">ALMORA</option>
            <option value="delhi">DELHI</option>
            <option value="banglore">BANGLORE</option>
            <option value="pune">PUNE</option>
            <option value="ranchi">RANCHI</option>
            <option value="jaipur">JAIPUR</option>
            <option value="lucknow">LUCKNOW</option>
</select><br><br>
        <input type="submit" name="submit" value="Click Here To Submit">
</form>
</body>
</html>


