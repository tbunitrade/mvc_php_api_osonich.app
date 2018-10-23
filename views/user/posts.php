<?php include ROOT . '/views/layouts/header_admin.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php
                foreach ($postList as $postItem):?>
                    <div class="row myClass">
                        <li class="col-md-2">
                            <button>
                            <a class="btn btn-default" href="/edit/<?php echo $postItem['id'] ;?>">Редактировать <?php echo $postItem['id'] ;?></a>
                            </button>
                        </li>

                        <li class="col-md-1">
                            <?php echo $postItem['date'] ;?>
                        </li>
                        <li class="col-md-2">

                            <?php echo $postItem['email'] ;?>
                        </li>
                        <li class="col-md-2">

                            <?php echo $postItem['content'] ;?>
                        </li>
                        <li class="col-md-1">
                            <?php echo $postItem['author_name'] ;?>

                        </li>
                        <li class="col-md-2">
                            <select name="status" value="<?= $postItem['status_id'] ?>">
                                <?php foreach ($statuses as $status) : ?>
                                    <option disabled="disabled" value="<?= $status['id'] ?>" <?php if($status['id'] == $postItem['status_id']) echo 'selected="selected" ' ?>><?= $status['name'] ?></option>
                                <?php endforeach; ?>
                            </select>

                        </li>
                        <li class="col-md-2">
                            <img class="img-responsive" src="../../<?php echo $postItem['preview'] ;?>">

                        </li>


                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>