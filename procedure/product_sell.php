<?php
$database = mysqli_connect("localhost","root","","create_two_table");

if(isset($_POST['submit_manufacture'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $database->query("call add_manufactures('$name','$contact','$address')");
}

if(isset($_POST['submit_product'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $manufacture_id = $_POST['manufact'];

    $database->query("call add_product('$name','$price','$manufacture_id')");
}
?>
<?php
if(isset($_POST['Delete_product'])){
    $delete = $_POST['manufact'];
    $database->query("DELETE FROM manufactures WHERE id = '$delete'");
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product sell table</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <h1>Manufacture Table</h1>
            name: <br>
            <input type="text" name="name"> <br> <br>
            contact: <br>
            <input type="text" name="contact"> <br> <br>
            address: <br>
            <input type="text" name="address"> <br> <br>
            <input type="submit" name="submit_manufacture" value="Submit" >
        </fieldset>
    </form>
    <br> <br>
    <form action="" method="post">
        <fieldset>
            <h1>Product Table</h1>
            name: <br>
            <input type="text" name="name" id=""> <br> <br>
            price: <br> <br>
            <input type="text" name="price"> <br> <br>
            manufacture_id: <br> <br>
            <select name="manufact" id="">
                <?php
                $manufac=$database->query("select * from manufactures");
                while(list($id,$name)=$manufac->fetch_row()){
                    echo "<option value='$id'>$name</option>";
                }
                ?>
            </select>

            <input type="submit" name="submit_product" value="Submit">
        </fieldset>
    </form>

     <table border="2">
         <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $manufac=$database->query("SELECT * FROM view_table");
            while(list($id,$name,$price)= $manufac->fetch_row()){
             ?>
              <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $price; ?></td>
              </tr> 
              <?php  
            }
            ?>
         </tbody>
    </table>
    <form action="" method="post">
        <fieldset>
        Manufacture_id: <br>
            <select name="manufact" id="">
                <?php
                $manufac=$database->query("select * from manufactures");
                while(list($id,$name)=$manufac->fetch_row()){
                    echo "<option value='$id'>$name</option>";
                }
                ?>
            </select>
            <input type="submit" name="Delete_product" value="Delete">
            </fieldset>
    </form>
</body>
</html>