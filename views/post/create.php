<?php include ROOT . '/views/layouts/header.php';
?>
    <div class="container">
        <h1>Cоздать таск</h1>

        <form class="myForm" method="post" action="" enctype="multipart/form-data">

            <fieldset class="form-group">
                <label for="myname">Имя :</label>
                <input id="myname" name="myname" type="text" class="form-control" placeholder="укажите имя">
                <input id="secondname" name="secondname" type="text" class="form-control" placeholder="укажите фамилию">
                <input id="lastname" name="lastname" type="text" class="form-control" placeholder="укажите отчество">
            </fieldset>

            <fieldset class="form-group">
                <label for="email">Ваша почта :</label>
                <input id="email" name="email" type="email" class="form-control" placeholder="Email" required>

                <input id="city" name="city" type="text" class="form-control" placeholder="Місто" required>
                <input id="postindex" name="postindex" type="text" class="form-control" placeholder="Місто" required>
                <input id="street" name="street" type="text" class="form-control" placeholder="Місто" required>
                <input id="house" name="house" type="text" class="form-control" placeholder="Місто" required>
                <input id="room" name="room" type="text" class="form-control" placeholder="Місто" required>
            </fieldset>

            <fieldset>
                <label for="content">Текст задачи :</label>
                <textarea name="content" id="task" rows="10" cols="45" type="textarea" placeholder="Сообщение" value=""/></textarea>
            </fieldset>

            <fieldset class="form-group">

                <label for="InputImg">Картинка :<br>
                    <div class="upload_img_wrapper">     <img id="foo" src="" height="200" alt="Image preview..."></div>
                </label>
                <input type="file" name="file" onchange="previewFile()">
                 <br />
                <script>
                    function previewFile() {
                        var preview = document.querySelector('img');
                        var file    = document.querySelector('input[type=file]').files[0];
                        var reader  = new FileReader();

                        reader.addEventListener("load", function () {
                            preview.src = reader.result;
                        }, false);

                        if (file) {
                            reader.readAsDataURL(file);
                        }
                    }
                </script>


            </fieldset>
            <div class="row">
                <div class="col-md-6">
                    <input type="button" class="btn btn-default btn-block" onclick="preview()" name="button_Preview" id="button_Preview" value="Предварительный просмотр" data-toggle="modal" data-target="#Preview">
                </div>
                <div class="col-md-6">
                    <input type="submit" name="submit" class="btn btn-default btn-block" value="Сохранить задание" />
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="Preview" tabindex="-1" role="dialog" aria-labelledby="mLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="mLabel">Предварительный просмотр</h4>
                        </div>
                        <div class="modal-body">
                            <div id="toPreview">

                                <script type="text/javascript">
                                    function preview() {
                                        var name = document.getElementById('myname').value;
                                        var email = document.getElementById('email').value;
                                        var task = document.getElementById('task').value;

                                        var newmname = document.querySelector('.newname').innerHTML = name;
                                        var newmail = document.querySelector('.newmail').innerHTML = email;
                                        var newtext = document.querySelector('.newtext').innerHTML = task;

                                        var src = document.getElementById("foo").getAttribute("src");
                                        console.log(src);
                                        document.getElementById("footoo").src = src;

                                    }
                                    console.log('i run preview');
                                </script>

                                <div class="newname">2 </div>
                                <div class="newmail">2 </div>
                                <div class="newtext">3 </div>
                                <img id="footoo" height="200" src="" />
                                <div class="newimage"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
<?php
include ROOT . '/views/layouts/footer.php'; ?>