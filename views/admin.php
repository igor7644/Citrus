<?php

use App\Entity\Comment;
use App\Repository\CommentRepository;

$commentRepository = new CommentRepository();
$comments = $commentRepository->getUnapproved();

?>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-md-12 page-button">
            <a class="btn btn-dark" href="index.php?page=home" role="button">HOME</a>
        </div>
    </div>

    <div class="row admin">

        <?php
        /** @var Comment $comment */
        foreach($comments as $comment): ?>
            <div class="col-md-8 offset-md-2 admin-comments">
                <p><b><?= $comment->getName() ?>:</b> <?= $comment->getComment() ?></p>
                <form action="">
                    <button type="button" class="btn btn-success">Approve</button>
                </form>
            </div> <hr>
        <?php endforeach; ?>

    </div>

    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
</body>
</html>