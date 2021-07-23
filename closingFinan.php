<?php
        include ('templates/header.php');  
        require ('includes/db.php');   
?>

<?php   
    
    echo "
        <table class='itemList'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Description</th>
                    <th>Quantity</th>
                </tr>
            </thead>
        </tbody>
    ";

    $sql = "SELECT * FROM ordersubmit";
    $result = mysqli_query($conn, $sql);
    $resutCheck = mysqli_num_rows($result);
    if ($resutCheck > 0){
        while($row = mysqli_fetch_array($result)){
            echo "            
                <tr>
                    <td>".$row['idItems']."</td>
                    <td>".$row['brand']." ".$row['description']."</td>
                    <td>".$row['amntOrder']."</td>
                </tr>
                ";

        }

    }

    echo "<input type=\"button\" value=\"Print this page\" onclick=\"printpage()\" />";

?>

</main>

<?php
    include ('templates/footer.php');     
?>

</html>