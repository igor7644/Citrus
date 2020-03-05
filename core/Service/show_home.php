<?php

namespace App\Service;

use App\Entity\Product;
use App\Entity\Comment;
use App\Repository\ProductRepository;
use App\Repository\CommentRepository;

$productRepository = new ProductRepository();
$products = $productRepository->get();
$commentRepository = new CommentRepository();
$comments = $commentRepository->get();

include 'views/home.php';