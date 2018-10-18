<?php include ROOT . '/views/layouts/header.php'; ?>
<div class="container">
    <a href="/post">Главная</a>
    <div class="row myClass">
        <div class="col-md-1">
            <a href="/post/view/<?php echo $postItem['id'] ;?>"><?php echo $postItem['id'] ;?></a>
        </div>

        <div class="col-md-1">
            <?php echo $postItem['date'] ;?>
        </div>
        <div class="col-md-2">

            <?php echo $postItem['email'] ;?>
        </div>
        <div class="col-md-3">

            <?php echo $postItem['content'] ;?>
        </div>
        <div class="col-md-2">
            <?php echo $postItem['author_name'] ;?>

        </div>
        <div class="col-md-3">
            <img class="img-responsive" src="../../template/<?php echo $postItem['preview'] ;?>">

        </div>
    </div>

</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>