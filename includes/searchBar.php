<?php
    require ('db.php');

    if(isset($_POST['search'])){
        $search = mysqli_real_escape_string($conn, $_POST['item']);
        $sql = "SELECT * FROM items WHERE brand LIKE '%$search' OR description LIKE '%$search'";
        $res = mysqli_query($conn, $sql);
        $resCheck = mysqli_num_rows($res);

        if ($search != null){
            if($resCheck > 0){
                while ($row = mysqli_fetch_array($res)) {
                    
                    echo "
                        <div class='unit'>
                            <form>
                                <tr>
                                    <td>".$row['brand']."</td>
                                    <td>".$row['description']."</td>
                                    <td>".$row['itemType']."</td>
                                    <td>".$row['pCost']."</td>
                                    <td>".$row['amntOrder']."</td>
                                    <td><input type='number' name='amntOrder'></td>
                                    <td><input type='submit' name='orderSubmit' value='Add to Cart'></td>
                                </tr>
                            </form>
                        </div>
                    ";
                    
                }
            }
            else{
                echo "There are no results mathcing your search";
            }
        }
        



        
        
    }


?>