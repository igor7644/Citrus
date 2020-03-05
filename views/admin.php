<?php
    include 'views/includes/head.php';
?>
<body>

<div class="container">

    <div class="row">
        <div class="col-md-12 page-button">
            <a class="btn btn-dark" href="index.php?page=home" role="button">HOME</a>
        </div>
    </div>

    <div class="row admin unapproved-comments">

        <?php
        /** @var Comment $comment */
        foreach($comments as $comment): ?>
            <div class="col-md-8 offset-md-2 admin-comments">
                <p><b><?= $comment->getName() ?>:</b> <?= $comment->getComment() ?></p>
                    <button type="button" class="btn btn-success approve" data-id="<?= $comment->getId()
                    ?>">Approve</button>
            </div> <hr>
        <?php endforeach; ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="public/js/script.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
</body>
</html>