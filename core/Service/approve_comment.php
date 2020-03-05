<?php
namespace App\Service;

use App\Repository\CommentRepository;

require '../../vendor/autoload.php';

$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod === 'POST')
{
    $comment = $_POST['id'];
    $commentRepository = new CommentRepository();
    $approved = $commentRepository->approve($comment);
    if($approved)
    {
        http_response_code(200);
        echo json_encode($commentRepository->getUnapproved());
    }
    else http_response_code(500);
}

