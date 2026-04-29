<?php
$connect= mysqli_connect("localhost","root","","brand_product");

if(isset($_POST['submit'])){
    $_n = $_POST['name'];
    $_c = $_POST['contact'];
    $query = "INSERT INTO brand(name,contact) VALUES ('$_n','$_c')";
    if((mysqli_query($connect,$query))){
    echo "success";
}}

if(isset($_POST['btnsubmit'])){
    $name= $_POST['name'];
    $price=$_POST['price'];
    $brand_id=$_POST['brand_id'];
    $product=$_POST['product_image'];
    $query="INSERT INTO product (name,price,brand_id,product_image) VALUES ('$name','$price','$brand_id','$product')";
    if((mysqli_query($connect,$query))){
        echo "product successfully";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brand_product</title>
</head>
<body>
     <h1>Brand Table</h1>
    <fieldset>
       
        <form action="" method="post">
            name: <br>
            <input type="text" name="name"> <br> <br>
            contact: <br> 
            <input type="text" name="contact"> <br> <br>
            <input type="submit"  name="submit" value="submit">
        </form>

    </fieldset>
    <br> <br>
    <body>
        <h2>Product Table</h2>
        <fieldset>
            <form action="" method="post">
                name: <br>
                <input type="text" name="name"> <br> <br>
                price: <br>
                <input type="text" name="price"> <br> <br>
                brand_id: <br>
                <select name="manufact" id="">
                <?php
                $manufac=$connect->query("select * from brand");
                while(list($id,$name)=$manufac->fetch_row()){
                    echo "<option value='$id'>$name</option>";
                }
                ?>
            </select> <br> <br>
                product image: <br>
                <input type="text" name="product_image"> <br> <br>
                <input type="submit" name="btnsubmit" value="btnsubmit">

            </form>
        </fieldset>
    </body>
</body>
</html>