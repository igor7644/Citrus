<?php

use App\Entity\Product;
use App\Repository\ProductRepository;

$productRepository = new ProductRepository();
$products = $productRepository->get();

?>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<div class="container">

    <div class="row">
        <?php
        /** @var Product $product */
        foreach($products as $product): ?>
            <div class="col-md-4 product">
                <img class="img-thumbnail" src="<?= $product->getSrc() ?>" alt="<?= $product->getAlt() ?>">
                <h3><?= $product->getProduct() ?></h3>
                <p><?= $product->getDescription() ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="row comments">
        <div class="col-md-8 offset-md-2">
            <p><b>Igoritza:</b> I love citrus!</p>
        </div>
    </div>

    <div class="row input-form">
        <div class="col-md-10 offset-md-1">
            <form>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Enter name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Enter comment">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-dark">SEND</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
</body>
</html>