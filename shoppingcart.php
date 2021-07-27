<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
</head>
<body class="container">
    
 <div class="row">
    <?PHP

    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'ytshoppingcart');
    
    $query = "SELECT  `name`, `image`, `price`, `discount` FROM `ytshoppingcart` order by id ASC ";

    $qyeryfire = mysqli_query($con,$query);

    $num = mysqli_num_rows($qyeryfire);

    if($num > 0){
        while($product = mysqli_fetch_array($qyeryfire)){
            ?>

            <div class="col-lg-3 col-md-3 col-sm-12">
              <form action="">
                  <div>
                      <h6 class="card-title bg-info text-white p-2"><?php echo $product['name']  ?></h6>

                      <div class="card-body">
                          <img src="<?php echo $product['image']  ?>" alt="phone image" class="img-fluid" mb-2 style="height:180px">
                      </div>

                      <h6> &#8377; <?php echo $product['price']  ?>
                      (<span><?php echo $product['discount']  ?> % off)</span></h6>

                      <h6 class="badge badge-success"></h6>
                  </div>

                  <input type="text" name="" class="form-control" placeholder="Quantity">
                  <div class="btn-group d-flex"> 
                  <button class="btn btn-success flex-fill">Add to cart</button>   
                  <button class="btn btn-warning">Buy Online </button> 
                   </div>
              </form>
            </div>

            <?php

        }
    }
    ?>

</div>    
</body>
</html>