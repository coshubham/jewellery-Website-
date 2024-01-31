<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    

    <title>Add To Cart</title>
</head>
<body style="background:rgb(230, 222, 222);">
        
          <a href="index.php"><img src="left.png" alt="" style="height:4rem; width:4rem; margin-left:5rem; margin-top:1rem" ></a>
        

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>
</div>

<div class="col-lg-9" >
 <table class="table">
            <thead class="table-dark text-center">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Remove</th>

    </tr>
  </thead>
  <tbody class="table-group-divider text-center">
    <?php
    $total=0;
    if(isset($_SESSION['cart'])){
    
     foreach($_SESSION['cart'] as $key => $value)
     {
        $sr=$key+1;
        $total=$total+$value['Price'];
        echo "
        <tr>
      <td>$sr</td>
      <td>$value[Item_Name]</td>
      <td>$value[Price]</td>
      <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
      <td>
       <form action='manger_cart.php' method='POST'>
      <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
      <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
      </form>
      </td>
    </tr>
        ";
     }
    }
    ?>   
       </tbody>
         </table>
        </div>

<div class="border bg-light text-" style="margin-left:53rem; margin-top:-2rem">
    <h3>Total:</h3>
    <h5 class="text-right"><?php echo $total?></h5>
    <form>
        <button class="btn btn-primary btn-block">Make Purchase</button>
    </form>
</div>
</div>

</div>
</body>
</html>