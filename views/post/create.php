<?php include ROOT . '/views/layouts/header.php';

?>
<div class="container">
    <h1>Cоздать таск</h1>

    <form class="myForm" method="post" action="" enctype="multipart/form-data">

        <fieldset class="form-group">
            <label for="myname">Имя :</label>
            <input id="myname" name="myname" type="text" class="form-control" placeholder="укажите имя">
        </fieldset>

        <fieldset class="form-group">
            <label for="email">Ваша почта :</label>
            <input id="email" name="email" type="email" class="form-control" placeholder="Email" required>
        </fieldset>

        <fieldset>
            <label for="content">Текст задачи :</label>
            <textarea name="content" id="task" rows="10" cols="45" type="textarea" placeholder="Сообщение" value=""/></textarea>
        </fieldset>

        <fieldset class="form-group">

            <label for="InputImg">Картинка :<br>
                <div class="upload_img_wrapper"><div id="preview_img"></div></div>
            </label>
            <input type="file" name="file"  preview-target-id="preview_img" / > <br />
            <script>
                $('input[type="file"][preview-target-id]').on('change', function() {
                    var input = $(this)

                    if (!window.FileReader) return false // check for browser support

                    if (input[0].files && input[0].files[0]) {

                        var reader = new FileReader()
                        reader.onload = function (e) {
                            var target = $('#' + input.attr('preview-target-id'))
                            var background_image = 'url(' + e.target.result + ')'
                            target.css('background-image', background_image)
                            target.parent().show()
                        }
                        reader.readAsDataURL(input[0].files[0]);
                    }
                })
            </script>

        </fieldset>
        <div class="row">
            <div class="col-md-6">
                <input type="button" class="btn btn-default btn-block" name="button_Preview" id="button_Preview" value="Предварительный просмотр" data-toggle="modal" data-target="#Preview">
            </div>
            <div class="col-md-6">
                <input type="submit" name="submit" class="btn btn-default" value="Сохранить задание" />
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
                        <div id="toPreview"></div>
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