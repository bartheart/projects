<?php
    include ('templates/header.php');     
    include ('includes/db.php');   
        
?>

    <div>
        <h1>Search for your products</h1>
        <div class="searchBar">
            <form action="order.php" method="POST">
                <input type="text" placeholder="Search key terms" name="item">
                <input id="search" name="search" value="Search" type="submit">
            </form></br>
            <div class="o_table"><?php
                require ('includes/searchBar.php');        
            ?></div>
        </div>
    </div><hr>

    <div><h2>Cigarettes</h2> </div>
    <div class='o_table'>
    <?php 
        //Cigarette
        $sql = "SELECT * FROM items";
        $result = mysqli_query($conn, $sql);
        $resutCheck = mysqli_num_rows($result);
        if ($resutCheck > 0){
            while($row = mysqli_fetch_array($result)){
                if($row['itemType'] == 'cigarette'){
                    echo " 
                        <div class='unit unit_".$row['idItems']."'>
                            <form action='' method='POST' id=".$row['idItems'].">                                                     
                                <div class='nameT'>".$row['brand']."</div>
                                <div class='descT'>".$row['description']."</div>
                                <div class='itemT'>".$row['itemType']."</div>
                                <div class='costT'>".$row['pCost']."</div>
                                <div class='amnT'>".$row['amntOrder']."</div>
                                <div class='noT'><input type='number' name='amntOrder'></div>
                                <div class='shit'><input value=".$row['idItems']." name='idd'></div>
                                <div class='subT'><input type='submit' value='Add to Cart' name='orderSubmit'></div>                                                    
                            </form>
                        </div>
                    ";
                }
                elseif($row['itemType'] == 'drink'){
                    echo " 
                        <div class='unit unit_".$row['idItems']."'>
                            <form action='' method='POST' id=".$row['idItems'].">                                                     
                                <div class='nameT'>".$row['brand']."</div>
                                <div class='descT'>".$row['description']."</div>
                                <div class='itemT'>".$row['itemType']."</div>
                                <div class='costT'>".$row['pCost']."</div>
                                <div class='amnT'>".$row['amntOrder']."</div>
                                <div class='noT'><input type='number' name='amntOrder'></div>
                                <div class='shit'><input value=".$row['idItems']." name='idd'></div>
                                <div class='subT'><input type='submit' value='Add to Cart' name='orderSubmit'></div>                                                    
                            </form>
                        </div>";
                }
                elseif($row['itemType'] == 'others'){
                    echo " 
                        <div class='unit unit_".$row['idItems']."'>
                            <form action='' method='POST' id=".$row['idItems'].">                                                     
                                <div class='nameT'>".$row['brand']."</div>
                                <div class='descT'>".$row['description']."</div>
                                <div class='itemT'>".$row['itemType']."</div>
                                <div class='costT'>".$row['pCost']."</div>
                                <div class='amnT'>".$row['amntOrder']."</div>
                                <div class='noT'><input type='number' name='amntOrder'></div>
                                <div class='shit'><input value=".$row['idItems']." name='idd'></div>
                                <div class='subT'><input type='submit' value='Add to Cart' name='orderSubmit'></div>                                                    
                            </form>
                        </div>";
                }
                   
            }    
        }
    ?> 
    </div><hr>   
        
    <?php   
        if(isset($_POST['orderSubmit'])){ 
            $row = mysqli_fetch_array($result);
            $amntOrder = $_POST['amntOrder'];
            $sql2 = "INSERT INTO  cart (brand, description, itemType, pCost, amntOrder) SELECT brand, description, itemType, pCost, $amntOrder FROM items WHERE idItems = ".$_POST['idd']
            ."";
            $result2 = mysqli_query($conn, $sql2);
        }        
    ?>
    
</main>

<?php
    include ('templates/footer.php');     
?>

</html>