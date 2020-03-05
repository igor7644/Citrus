<?php

namespace App\Service;

use App\Repository\CommentRepository;

require '../../vendor/autoload.php';

if(isset($_POST))
{
    $comment = $_POST['commentId'];
    $commentRepository = new CommentRepository();
    $commentRepository->approve($comment);
}