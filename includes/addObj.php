<?php
    require 'db.php';

    if(isset($_POST['item_submit'])){       

        $brand = $_POST['brand'];
        $description = $_POST['description'];
        $itemType = $_POST['itemType'];
        $pCost = $_POST['pCost'];

        $sql = "INSERT INTO  items (brand, description, itemType, pCost) VALUES ('$brand','$description','$itemType','$pCost')";
        $result = mysqli_query($conn, $sql);
    }

?>