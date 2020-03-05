<?php

use App\Entity\Comment;
use App\Repository\CommentRepository;

$commentRepository = new CommentRepository();
$comments = $commentRepository->getUnapproved();

include 'views/admin.php';