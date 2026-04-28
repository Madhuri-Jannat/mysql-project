<?php
$connect= mysqli_connect("localhost","root","","student_info");

if(isset($_POST['submit'])){
    $_n = $_POST['name'];
    $_e = $_POST['email'];
    $_c = $_POST['contact'];
    $_a = $_POST['address'];
    $query = "INSERT INTO student(name,email,contact,address) VALUES ('$_n','$_e','$_c','$_a')";
    
    if((mysqli_query($connect,$query))){
    echo "success";
}}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <form action="" method="post">
           name: <br>
           <input type="text" name="name">  <br> <br>
           email: <br>
           <input type="text" name="email"> <br> <br>
           contact: <br>
           <input type="text" name="contact"> <br> <br>
           address: <br>
           <input type="text" name ="address"> <br> <br>
            <input type="submit" name="submit" value="submit">
        </form>
        <br>
        <a href="view.php"><button type="button" class="btn btn-primary">view</button></a>
    </fieldset>
</body>
</html>