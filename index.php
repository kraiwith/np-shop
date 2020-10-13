<?php
include_once('functions.php');

$fn = new functions();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Shop</title>
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
        <label for="">Product</label>
        <div class="form-inline mb-4">
            <a href="./products/product-create.php">
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Create </button> </a>
        </div>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $fn->productGetAll();
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td> <?php echo $row['product_id']; ?> </td>
                        <td> <?php echo $row['product_name']; ?> </td>
                        <td class="text-right"> <?php echo $row['product_price']; ?> </td>
                        <td class="text-center" width="130px">
                            <a class="text-warning mx-2" <?php echo "href='products/product-update.php?pId=" . $row['product_id'] . "'"; ?>>
                                <i class="fas fa-edit" data-toggle="tooltip" title="Update"></i></a>
                            <a class="text-danger mx-2"><i class="fas fa-times" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
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