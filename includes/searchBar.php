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
                            <form  method='POST'>                                
                                <div class='nameT'>".$row['brand']."</div>
                                <div class='descT'>".$row['description']."</div>
                                <div class='itemT'>".$row['itemType']."</div>
                                <div class='costT'>".$row['pCost']."</div>
                                <div class='amnT'>".$row['amntOrder']."</div>
                                <div class='noT'><input type='number' name='amntOrder'></div>
                                <div class='shit'><input value=".$row['idItems']." name='idd'></div>
                                <div class='subT'><input type='submit' name='orderSubmit' value='Add to Cart'></div>
                                
                            </form>
                        </div>
                    ";
                    
                }
                if(isset($_POST['orderSubmit'])){ 
                    $row = mysqli_fetch_array($result);
                    $amntOrder = $_POST['amntOrder'];
                    $sql2 = "INSERT INTO  cart (brand, description, itemType, pCost, amntOrder) SELECT brand, description, itemType, pCost, $amntOrder FROM items WHERE idItems = ".$_POST['idd']
                    ."";
                    $result2 = mysqli_query($conn, $sql2);
                }
            }
            else{
                echo "There are no results mathcing your search";
            }
        }
        



        
        
    }


?>