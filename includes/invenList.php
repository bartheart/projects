<?php

    require 'db.php';
    
    echo "
        <table class='itemList'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Brand</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Cost</th>
                    <th>Last Order</th>
                </tr>
            </thead>
        </tbody>
    ";

    $sql = "SELECT * FROM items";
    $result = mysqli_query($conn, $sql);
    $resutCheck = mysqli_num_rows($result);
    if ($resutCheck > 0){
        while($row = mysqli_fetch_array($result)){
            echo "            
                <tr>
                    <td>".$row['idItems']."</td>
                    <td>".$row['brand']."</td>
                    <td>".$row['description']."</td>
                    <td>".$row['itemType']."</td>
                    <td>".$row['pCost']."</td>
                    <td>".$row['amntOrder']."</td>
                </tr>
                ";

        }

    }
    
    
?>