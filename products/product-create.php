<?php
include_once('../functions.php');

$function = new functions();

if (isset($_POST["submit"])) {
    $productName = $_POST["name"];
    $productPrice = $_POST["price"];
    print_r($_POST);
    // $result = $function->productCreate($productName, $productPrice);
    // if ($result) {
    //     echo "<script>window.alert('Create Successful.');</script>";
    //     echo "<script>window.location.href = '../';</script>";
    // } else {
    //     echo "<script>window.alert('Faild to create. Try again later.');</script>";
    //     echo "<script>window.location.href = '../';</script>";
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Create | Shop</title>
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
</style>

<body>
    <div class="container">
        <label for="">Product Create</label>
        <div class="form-inline mb-5">
            <a href="../">
                <button type="button" class="btn btn-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back </button> </a>
        </div>

        <form method="POST">
            <div class="form-group input-group">
                <label for="">Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <label class="custom-file-label" for="input-files">Choose files</label>
                        <input type="file" name="files" class="custom-file-input" id="input-files" multiple accept="image/*">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Product name" require>
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control" name="price" placeholder="100.00" min="0" step="0.1" require>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Create </button>
            </div>
        </form>
    </div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>