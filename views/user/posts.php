<?php include ROOT . '/views/layouts/header_admin.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php
                foreach ($postList as $postItem):?>
                    <div class="row myClass">
                        <li class="col-md-2">
                            <button>
                            <a href="/edit/<?php echo $postItem['id'] ;?>">Редактировать <?php echo $postItem['id'] ;?></a>
                            </button>
                        </li>

                        <li class="col-md-1">
                            <?php echo $postItem['date'] ;?>
                        </li>
                        <li class="col-md-2">

                            <?php echo $postItem['email'] ;?>
                        </li>
                        <li class="col-md-3">

                            <?php echo $postItem['content'] ;?>
                        </li>
                        <li class="col-md-1">
                            <?php echo $postItem['author_name'] ;?>

                        </li>
                        <li class="col-md-3">
                            <img class="img-responsive" src="<?php echo $postItem['preview'] ;?>">

                        </li>

                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>