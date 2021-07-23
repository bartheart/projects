<?php

    require 'db.php';
    
    echo "
        <table class='itemList'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Cost</th>
                    <th>Amount in Stock</th>
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
                    <form>
                        <td></td>
                        <td>".$row['name']."</td>
                        <td>".$row['description']."</td>
                        <td>".$row['pCost']."</td>
                        <td>".$row['amount']."</td>
                    </form>
                </tr>
                ";

        }

    }
    
    
?>