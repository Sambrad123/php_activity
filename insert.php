<?php

include_once("config/database.php");

?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
</head>
    <style type="text/css">
    </style>
<body style="background-color:skyblue">
<div class="container" color ="">
    <form method="post" class="form-horizontal" enctype="multipart/form-data">

        <div class="form-group">
            <label class="col-md-3 control-label" style="color:white"> Product Name </label>
            <div class="col-md-6">
                <input name="product_name" type="text" class="form-control" required>
            </div>
        </div>

<div class="form-group">
    <div class="form-group">
        <label class="col-md-3 control-label" style="color:white"> Product Price </label>
        <div class="col-md-6">
            <input name="product_price" type="text" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" style="color:white"> Product Quantity </label>
        <div class="col-md-6">
            <input name="product_quantity" type="text" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" style="color:white"> Product Description </label>
        <div class="col-md-6">
            <textarea name="product_description" cols="19" rows="6" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label"></label>
        <div class="col-md-6">
            <input name="submit" value="Insert Product" type="submit"
                   class="btn btn-primary form-control" style="background-color:black">
        </div>
    </div>
    </form>

</div>
</div>
<script src="assets/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>
</body>
</html>


<?php

if (isset($_POST['submit'])) {  

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    $product_desc = $_POST['product_description'];


    $insert_product = "insert into product(product_name,product_price,product_quantity,product_description) values ('$product_name','$product_price','$product_quantity','$product_desc')";

    $run_product = mysqli_query($con, $insert_product);

    if ($run_product) {

        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";

    }

}

?>

