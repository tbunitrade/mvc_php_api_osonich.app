<?php include ROOT . '/views/layouts/header_edit_admin.php'; ?>
<div class="container">

    <div class="row myClass">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn" href="/post/view/<?php echo $postItem['id'] ;?>">Задание №<?php echo $postItem['id'] ;?></a>
                </div>

                <div class="col-md-12">
                    <p class="text-info">
                        <?php echo $postItem['date'] ;?>
                    </p>
                </div>
                <div class="col-md-12">
                    <p class="text-info">
                        <?php echo $postItem['email'] ;?>
                    </p>
                </div>
                <div class="col-md-12">
                    <p class="text-info">
                        <?php echo $postItem['author_name'] ;?>
                    </p>

                </div>
                <div class="col-md-12">
                    <p class="text-primary">
                    <?php echo $postItem['content'] ;?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <img class="img-responsive" src="/<?php echo $postItem['preview'] ;?>">

                </div>
                <div class="col-md-12">
                    <select name="status" value="<?= $postItem['status_id'] ?>">
                        <?php foreach ($statuses as $status) : ?>
                            <option disabled="disabled" value="<?= $status['id'] ?>" <?php if($status['id'] == $postItem['status_id']) echo 'selected="selected" ' ?>><?= $status['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>