<?php
$connect = mysqli_connect("localhost","root", "", "student_info" );
if($_GET['id']){
    $id = $_GET['id'];
    $query = "SELECT * FROM product WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_assoc($result);
    $uid = $data['id'];
    $uname = $data['name'];
    $uemail=$data['email'];
    $ucontact=$data['contact'];
    $uaddress=$data['address'];

}
if(isset($_POST['update'])){
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name: <br>
        <input type="text" name="name"> <br> <br>
        email: <br>
        <input type="text" name="email"> <br> <br>
        contact: <br>
        <input type="text" name="contact"> <br> <br>
        address: <br>
        <input type="text" name="address"> <br> <br>
        <input type="submit" name="update" value="Save & Change">
    </form>
</body>
</html>