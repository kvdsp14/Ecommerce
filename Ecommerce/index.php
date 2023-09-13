<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <!-- ------------------------------------------------------------------- -->
</head>

<body>
    <!-- <h1>Ecommerce Website</h1> -->
    <?php

    include './partials/connect.php';
    include './partials/heador.php';
    ?>
    <h1 class="text-center text-primary my-3">Welcome to our store</h1>
    <h1 class="text-center text-success mb-4">Shop by Category</h1>
    <div class="container">
        <div class="row">

            <!-------------------- php-code --------------- -->
            <?php
            $sql ="select * from `cloths`";
            $result = mysqli_query($con,$sql);
            if($result){
                // $row = mysqli_fetch_assoc($result);
                // echo $row['category_name'];
                while($row = mysqli_fetch_assoc($result))
                {
                    $category_id= $row['category_id'];
                    $category_name= $row['category_name'];
                    $category_desc= $row['category_desc'];
                    $category_image= $row['category_image'];
                    $category_price= $row['category_price'];
                    echo ' <div class="col-md-4 col-sm-6 col-xm-12 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src='.$category_image.' class="card-img-top" alt="..."
                        style="height:300px;object-fir:contain">
                    <div class="card-body">
                        <h5 class="card-title">'.$category_name.'</h5>
                        <p class="card-text">'.substr($category_desc,0,75).'....</p>
                        <p style="color: red"> '.$category_price.'/-</p>
                        <a href="details.php?details_id='.$category_id.'" class="btn btn-primary">Shop Now</a>
                        </div>
                          </div>
                     </div>';

                    
                }
            }
            ?>


        </div>
    </div>
</body>

</html>