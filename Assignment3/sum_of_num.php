<html>
    <head>
        <title>Sum using php</title>
    </head>
    <body>
        <form method="POST" action="sum_of_num.php">
        <label>ENTER THE NUMBERS </label><br>
            Number 1 <input type="number" name="var1" required>
            Number 2 <input type="number" name="var2" required>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>

<?php
if(isset($_POST['submit'])){
    if(empty($_POST['var1'])||empty($POST['var2']))
    $sum = $_POST['var1'] + $_POST['var2'];
    echo "Sum of two numbers is ".$sum;
}
else{
    echo "No data to submit";
}
?>