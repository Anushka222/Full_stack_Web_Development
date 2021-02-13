<?php
include('config.php');
?>

<?php
$id=$_GET['id'];
$sql = "SELECT * FROM `users` WHERE `id`=$id";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$username = $row['username'];
$email = $row['email'];
$gender= $row['gender'];
$city = $row['city'];
?>
<?php
if(isset($_POST['update'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];

    $sql = "UPDATE `users` SET username='$username', email='$email', gender='$gender', city='$city' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        header("Location:details.php");
    }
    else{
        echo "Updation failed..";
    }
}
?>
<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="edit.php?id=<?php echo "$id"?>">
    USERNAME <input type="text" name="username" value=<?php echo "$username" ?> placeholder="Enter Username" required><br>
    E-MAIL <input type="email" name="email" value=<?php echo "$email" ?> placeholder="Enter E-mail" required><br>
    <label>Gender- </label>
    male<input type="radio" name="gender" value="male" <?php if($gender=="male"){echo "checked";}?> required>
    female<input type="radio" name="gender" value="female" <?php if($gender=="female"){echo "checked";}?> required><br>
    City <select name="city">
        <option value="Dehradun" <?php if($city=="Dehradun"){echo "selected";}?>>Dehradun</option>
        <option value="almora"<?php if($city=="almora"){echo "selected";}?>>ALMORA</option>
        <option value="delhi"<?php if($city=="delhi"){echo "selected";}?>>DELHI</option>
        <option value="banglore"<?php if($city=="banglore"){echo "selected";}?>>BANGLORE</option>
        <option value="pune"<?php if($city=="pune"){echo "selected";}?>>PUNE</option>
        <option value="ranchi"<?php if($city=="ranchi"){echo "selected";}?>>RANCHI</option>
        <option value="jaipur"<?php if($city=="jaipur"){echo "selected";}?>>JAIPUR</option>
        <option value="lucknow"<?php if($city=="lucknow"){echo "selected";}?>>LUCKNOW</option>
    </select><br>
    <input type="submit" name="update" value="Update">
</form>
</body>
</html>