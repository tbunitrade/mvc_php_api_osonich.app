<?php include ROOT . '/views/layouts/header_edit_admin.php'; ?>
    <div class="container">

    <div class="row myClass">

        <form method="post" enctype="multipart/form-data">
            <h1 class="h1">Здесь вы можете изменить задачу</h1>

            <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input  type="hidden" value="<?= $postItem['id'] ?>" name="id">
                            <a class="form-control" href="/post/view/<?php echo $postItem['id'] ;?>"><?php echo $postItem['id'] ;?></a>
                        </div>

                        <div class="col-md-12">
                            <fieldset class="form-group">
                                <input class="form-control" type="date" value=" <?php echo $postItem['date'] ;?>">
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset class="form-group">
                                <input class="form-control" type="email" name="email" value=" <?php echo $postItem['email'] ;?>">
                            </fieldset>

                            <fieldset class="form-group">
                                <input  class="form-control" name="myname" type="text" value=" <?php echo $postItem['author_name'] ;?>">
                            </fieldset>
                            <fieldset class="form-group">
                                <textarea class="form-control" name="content"><?php echo $postItem['content'] ;?></textarea>
                            </fieldset>

                            <label for="checkbox">Статус</label>
                            <hr>
                            <select class="form-control" name="status" value="<?= $postItem['status_id'] ?>">
                                <?php foreach ($statuses as $status) : ?>
                                    <option value="<?= $status['id'] ?>" <?php if($status['id'] == $postItem['status_id']) echo 'selected="selected"' ?>><?= $status['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <hr>

                                <input class=" btn btn-default" type="submit" value="ОБНОВИТЬ">

                        </div>


                    </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <fieldset>
                            <img class="img-responsive" style="max-width: 320px;" src="../../<?php echo $postItem['preview'] ;?>">
                        </fieldset>
                    </div>
                    <br>

                </div>
            </div>


        </form>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>