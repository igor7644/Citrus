<?php

namespace App\Service;

use App\Repository\CommentRepository;

require '../../vendor/autoload.php';

$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod === 'POST')
{
    $data = $_POST;
    $commentRepository = new CommentRepository();
    $commentRepository->store($data);
    header("Location: ../../index.php?page=home");
    exit();
}
