<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <?php
            foreach ($postList as $postItem):?>
                <div class="row myClass">
                        <li class="col-md-1">
                            <a href="/post/view/<?php echo $postItem['id'] ;?>"><?php echo $postItem['id'] ;?></a>
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
                        <li class="col-md-2">
                            <?php echo $postItem['author_name'] ;?>

                        </li>
                        <li class="col-md-3">
                            <img class="img-responsive" src="/template/<?php echo $postItem['preview'] ;?>">

                        </li>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
