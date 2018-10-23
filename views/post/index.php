<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <p>
                        <a href="/post?page=<?= $posts['page'] ?>&sort=id&direction=<?= $posts['direction'] ?>">ID</a><br>
                        <a href="/post?page=<?= $posts['page'] ?>&sort=<?= $posts['sort'] ?>&direction=ASC">ASC</a><br>
                        <a href="/post?page=<?= $posts['page'] ?>&sort=<?= $posts['sort'] ?>&direction=DESC">DESC</a><br>
                    </p>
                </div>

                <div class="col-md-2">
                    <p>Choose Date order:<br>
                        <a href="/post?page=<?= $posts['page'] ?>&sort=date&direction=<?= $posts['direction'] ?>">Date</a><br>
                    </p>
                </div>

                <div class="col-md-2">
                    <p>Choose Email order:<br>
                        <a href="/post?page=<?= $posts['page'] ?>&sort=email&direction=<?= $posts['direction'] ?>">Email</a><br>
                    </p>
                </div>
            </div>
            <br>

            <?php
            foreach ($postList as $postItem):?>
                <div class="row myClass">
                        <li class="col-md-1">
                            <a href="/post/view/<?php echo $postItem['id'] ;?>"><?php echo $postItem['id'] ;?></a>
                        </li>
                        <li class="col-md-2">

                            <select name="status" value="<?= $postItem['status_id'] ?>">
                                <?php foreach ($statuses as $status) : ?>
                                    <option disabled="disabled" value="<?= $status['id'] ?>" <?php if($status['id'] == $postItem['status_id']) echo 'selected="selected" ' ?>><?= $status['name'] ?></option>
                                <?php endforeach; ?>
                            </select>

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
                        <li class="col-md-2">
                            <?php echo $postItem['author_name'] ;?>

                        </li>
                        <li class="col-md-2">
                            <img class="img-responsive" src="<?php echo $postItem['preview'] ;?>">

                        </li>

                </div>
            <?php endforeach; ?>
            <ul class="pagination">
                <?php for($i = 1; $i <= $posts['pages']; $i++) : ?>
                    <li><a href="/post?page=<?= $i ?>&sort=<?= $posts['sort'] ?>&direction=<?= $posts['direction'] ?>"><?= $i ?></a></li>
                <?php endfor ?>
            </ul>

            <p>Total pages: <?= $posts['pages'] ?></p>
            <p>Current pages: <?= $posts['page'] ?></p>

        </div>
    </div>
</div>
