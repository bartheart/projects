<?php
    require 'includes/addObj.php';
    include ('templates/header.php');     
?>

    <div> 
        <form id="add" method="POST">
            <label for="brand">Brand</label>
            <input type="text" id="brand" name="brand" placeholder="Backwoods">
            <label for="description">Description</label>
            <input type="text" id="description" name="description">
            <label>Item Type</labe>
            <select id="itemType" name="itemType">
                <option value="cigarette">Cigarette</option>
                <option value="drink">Soda & Energy Drink</option>
                <option value="candy">Candy</option>
                <option value="others">Others</option>                
            </select>
            <label for="pCost">Principal Cost</label>
            <input type="text" id="pCost" name="pCost">            
            <input type="submit" name="item_submit" value="Submit">
        </form>
    </div>
</main>

<?php
    include ('templates/footer.php');     
?>

</html>