<?php
    include ('templates/header.php');
    include ('includes/db.php');

    if(isset($_POST['checkoutSubmit'])){
        //put this ina loop with a condition that the id is similar
        /* $sql = "SELECT amntOrder FROM cart";
        $result = mysqli_query($conn, $sql);
        foreach ($result as $row){
            if(){}
        } */
        $sql2 = "INSERT INTO  items (amntOrder) SELECT amntOrder FROM cart WHERE ";
        $result2 = mysqli_query($conn, $sql2);
        $sql = "INSERT INTO  ordersubmit (brand, description, itemType, pCost, amntOrder) SELECT brand, description, itemType, pCost, amntOrder FROM cart";
        $result = mysqli_query($conn, $sql);
        $sql3 = "DELETE FROM cart";
        $result3 = mysqli_query($conn, $sql3); 
        if($sql){
            echo'Item added to cart sucessfully!';
        }  

    };

    if(isset($_POST['deleteItem'])){
        $sql4 = "DELETE FROM cart WHERE idItems = ".$_POST['idd']."";
        $result4 = mysqli_query($conn, $sql4);   

    }
    

?>

<form action='cart.php' method='POST'>
    <div class='o_table'>
    <?php
        $sql = "SELECT * FROM cart";
        $result = mysqli_query($conn, $sql);
        $resutCheck = mysqli_num_rows($result);
        if ($resutCheck > 0){
            while($row = mysqli_fetch_array($result)){
                echo "  
                    <div class='car unit'> 
                        <form method='POST'>                                                                        
                            <div class='nameT'>".$row['brand']."</div>
                            <div class='descT'>".$row['description']."</div>
                            <div class='itemT'>".$row['itemType']."</div>
                            <div class='costT'>".$row['pCost']."</div>
                            <div class='amnT'>".$row['amntOrder']."</div> 
                            <div class='shit'><input value=".$row['idItems']." name='idd'></div>
                            <div class='subT'><input type='submit' value='Remove' name='deleteItem'></div>         
                        </form>
                    </div>
                    ";
            }
            echo"<div class='subT'><input type='submit' value='Check Out' name='checkoutSubmit'></div>";
        }
        else{
            echo 'The cart is empty';
        }
    ?>
    </div>
    
</form>

</main>


</html>