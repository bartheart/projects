<?php
    function addItem(){
        header("Location: addItem.php");
    }
    function finan(){
        header("Location: closingFinan.php");
    }
    function inven(){
        header("Location: inventory.php");
    }
    function order(){
        header("Location: order.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/button.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="images/preN.png"></a>
        </div>
        <nav class="navLink">
        <a id="inventory" href="inventory.php" class="btn btn-white">Home</a></button>
            <a class="btn btn-white" id="orderItem" href="order.php">Order Products</a>
            <a class="btn btn-white" href="addItem.php">Add To Inventory</a>
            <a class="btn btn-white" id="finan" href="closingFinan.php">Print Order</a>
        </nav>
        <div class="cart">
            <a href="cart.php"><img src="images/shopping-cart.png"></a>
        </div>
       
          
    </header>   
    
    <main>
