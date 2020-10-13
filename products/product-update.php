<?php
include_once('../functions.php');

$fn = new functions();

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($actual_link);
parse_str($parts['query'], $query);
$productId = $query['pId'];

$product = $fn->productGetById($productId)->fetch_assoc();
print_r($product);

if (isset($_POST["submit"])) {
    print_r($_POST);
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];

    $result = $fn->productUpdate($id, $name, $price);
    if ($result) {
        echo "<script>window.alert('Update Successful.');</script>";
        echo "<script>window.location.href = '../';</script>";
    } else {
        echo "<script>window.alert('Faild to update. Try again later.');</script>";
        echo "<script>window.location.href = '../';</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Shop | Update</title>
</head>

<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<style>
    html,
    body {
        font-family: 'Kanit', 'Roboto', sans-serif;
    }

    a {
        cursor: pointer;
    }
</style>

<body>
    <div class="container">
        <label for="">Product Update</label>
        <div class="form-inline mb-5">
            <a href="../">
                <button type="button" class="btn btn-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back </button> </a>
        </div>

        <form method="POST">
            <div class="form-group sr-only" hidden>
                <label for="">Id</label>
                <input type="text" class="form-control" name="id" placeholder="Product name" require value="<?php echo $product['product_id']; ?>">
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Product name" require value="<?php echo $product['product_name']; ?>">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control" name="price" placeholder="100.00" min="0" step="0.1" require value="<?php echo $product['product_price']; ?>">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Update </button>
            </div>
        </form>
    </div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
</body>

</html>