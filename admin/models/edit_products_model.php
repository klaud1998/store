<?php

session_start();

$mysqli = new mysqli('cis282store.cnhmyvnsbqbb.us-east-1.rds.amazonaws.com', 'sobczykstore', '!Volospheonix1998', 'cis282store') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$pro_name = '';


if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM cis282store.products WHERE product_id=$id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: ../delete_products_success.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM cis282store.products WHERE product_id=$id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $pro_name = $row['product_name'];
        
    }
}

if (isset($_POST['update'])){
    $id = $_POST['product_id'];
    $pro_name = $_POST['product_name'];
    
    $mysqli->query("UPDATE cis282store.products SET product_name='$pro_name'  WHERE product_id=$id") or
            die($mysqli->error);
    
    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";
    
    header("location: ../edit_products_success.php");
}








// Close Connection
mysqli_close($conn); 

?>