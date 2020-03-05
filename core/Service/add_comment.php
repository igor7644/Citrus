<?php

namespace App\Service;

use App\Repository\CommentRepository;

require '../../vendor/autoload.php';

if(isset($_POST))
{
    $data = $_POST;
    $commentRepository = new CommentRepository();
    $commentRepository->store($data);
}
