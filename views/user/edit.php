<?php include ROOT . '/views/layouts/header_admin.php'; ?>
    <div class="container">

    <div class="row myClass">

        <form method="post" enctype="multipart/form-data">
            <h1 class="h1">Здесь вы можете изменить задачу</h1>
            <fieldset>
                <div class="col-md-3">
                    <a href="/post/view/<?php echo $postItem['id'] ;?>"><?php echo $postItem['id'] ;?></a>
                </div>
            </fieldset>
            <fieldset>
                <div class="col-md-12">
                    <input type="hidden" value="<?= $postItem['id'] ?>" name="id">
                </div>
            </fieldset>
            <div class="col-md-12">
                <fieldset>
                    <input type="date" value=" <?php echo $postItem['date'] ;?>">
                </fieldset>
            </div>
            <div class="col-md-12">
                <fieldset>
                    <input type="email" name="email" value=" <?php echo $postItem['email'] ;?>">
                </fieldset>
            </div>
            <div class="col-md-12">
                <textarea name="content"><?php echo $postItem['content'] ;?></textarea>

            </div>
            <div class="col-md-12">
                <input name="myname" type="text" value=" <?php echo $postItem['author_name'] ;?>">


            </div>
            <div class="col-md-12">
                <img class="img-responsive" style="max-width: 320px;" src="../../<?php echo $postItem['preview'] ;?>">

            </div>

            <div class="col-md-12">
                <label for="checkbox">Статус</label>

                <select name="status" value="<?= $postItem['status_id'] ?>">
                    <?php foreach ($statuses as $status) : ?>
                        <option value="<?= $status['id'] ?>" <?php if($status['id'] == $postItem['status_id']) echo 'selected="selected"' ?>><?= $status['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button>
                <input type="submit" value="ОБНОВИТЬ">
            </button>
        </form>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>