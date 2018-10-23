<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 list-group">

            <p>
                Тест по программированию:
            </p>
            <p>
                Создать приложение-задачник.
            </p>

            <ul class="">
                <h4>Задачи состоят из:</h4>
                <li style="list-style-type: none">- имени пользователя;</li>
                <li style="list-style-type: none">- е-mail;</li>
                <li style="list-style-type: none">- текста задачи;</li>
                <li style="list-style-type: none">- картинки;</li>
            </ul>

                <div class="list-group-item list-group-item-success">
                    1  Стартовая страница - список задач с возможностью <br>
                сортировки по имени пользователя, email и статусу.
                </div>
                <br>
                <div class="list-group-item list-group-item-success">
                    2 Вывод задач нужно сделать страницами по 3 штуки (с пагинацией).
                </div>
                <br>
                <div class="list-group-item list-group-item-success">
                    3 (готово) Видеть список задач и создавать новые может любой посетитель без регистрации.
                </div>
                <br>
                <div class="list-group-item list-group-item-success">
                    4 (почти готово) Перед сохранением новой задачи можно нажать "Предварительный просмотр", <br>
                он должен работать без перезагрузки страницы.
                </div>
                <br>
                <div class="list-group-item list-group-item-success">
                    5 К задаче можно прикрепить картинку.
                </div>
                <br>
                <div class="list-group-item list-group-item-danger">
                    5.1   Требования к изображениям - формат JPG/GIF/PNG, не более 320х240 пикселей.<br>
                </div>
                <br>
                <div class="list-group-item list-group-item-success"> 5.2  При попытке загрузить изображение большего размера, <br>
                картинка должна быть пропорционально уменьшена до заданных размеров.
                (НА ОТОБРАЖЕНИИ превью до загрузки?)
                </div>
                <br>
                <div class="list-group-item list-group-item-danger">
                6.1 Сделайте вход для администратора (логин "admin", пароль "123").<br>
                </div>
                <br>
                <div class="list-group-item list-group-item-success">
                    6.2 Администратор имеет возможность редактировать текст задачи и поставить галочку о выполнении.<br>
                </div>
                <div class="list-group-item list-group-item-danger">
                    6.3 Выполненные задачи в общем списке выводятся с соответствующей отметкой.<br>
                </div>
                <p class="list-group-item list-group-item-info">
                    В приложении нужно с помощью чистого PHP реализовать модель MVC.<br>
                    Фреймворки PHP использовать нельзя, библиотеки - можно.<br>
                    Верстка на bootstrap.<br>
                    К дизайну особых требований нет, должно выглядеть аккуратно.
                </p>

        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>