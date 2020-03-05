<?php
    include 'views/includes/head.php';
?>
<body>

<div class="container">

    <div class="row">
        <div class="col-md-12 page-button">
            <a class="btn btn-dark" href="index.php?page=admin" role="button">ADMIN</a>
        </div>
    </div>

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
            <?php
            /** @var Comment $comment */
            foreach($comments as $comment): ?>
                <p><b><?= $comment->getName() ?>:</b> <?= $comment->getComment() ?></p>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="row input-form">
        <div class="col-md-10 offset-md-1">
            <form action="core/Service/add_comment.php" method="post">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Enter name" name="name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Enter email" name="email">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Enter comment" name="comment">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-dark">SEND</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="public/js/script.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
</body>
</html>