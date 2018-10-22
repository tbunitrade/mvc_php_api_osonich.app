<?php include ROOT . '/views/layouts/header_admin.php'; ?>
    <div class="container">
    <h1>Здесь вы можете изменить задачу</h1>
    <div class="row myClass">
        <form method="post" enctype="multipart/form-data">
            <div class="col-md-3">
                <a href="/post/view/<?php echo $postItem['id'] ;?>"><?php echo $postItem['id'] ;?></a>
            </div>

            <div class="col-md-12>

                <input type="date" value=" <?php echo $postItem['date'] ;?>">
            </div>
            <div class="col-md-12">
                <input type="email" name="email" value=" <?php echo $postItem['email'] ;?>">

            </div>
            <div class="col-md-12">
                <textarea name="content"><?php echo $postItem['content'] ;?></textarea>

            </div>
            <div class="col-md-12">
                <input name="myname" type="text" value=" <?php echo $postItem['author_name'] ;?>">


            </div>
            <div class="col-md-12">
                <img class="img-responsive" src="../../template/<?php echo $postItem['preview'] ;?>">

            </div>

            <button>
                <input type="submit" value="ОБНОВИТЬ">
            </button>
        </form>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>