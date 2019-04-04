<?php 




// Get All Products
$querySQL  = "SELECT *


    FROM
    cis282store.products p

    ORDER BY
    p.product_id
";
    
// Get Result
$result = mysqli_query($conn, $querySQL);

// Fetch Data
$productList = mysqli_fetch_all($result, MYSQLI_ASSOC);





















































// Free Result
mysqli_free_result($result);

// Close Connection
mysqli_close($conn); 


?>