<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 list-group">

            <p class="text-primary">
                Архітектурних модель MVC, <br>
                backend part use - php7x64,Apachex64<br>
                front end use - bootstrap+scss+npm(manager gulp(task)).
                <br>
                Javascript.
                <br>
                NodeJS as server side respond, test server.

            </p>

            <ul class="pagination">
                <h4>Web application:</h4>
                <li style="list-style-type: none">- Get request;</li>
                <li style="list-style-type: none">- Save request;</li>
                <li style="list-style-type: none">- Enable Cabinet;</li>
                <li style="list-style-type: none">- Add functionality;</li>
            </ul>
            <div class="list-group-item list-group-item-info">
            Web сервіс: Реєстрація доменного імені.

                <li style="list-style-type: none"> форма 1 - запит до API Imena.ua</li>

                <li style="list-style-type: none"> форма 2 - збереження даних та створення реєстрації</li>

                <li style="list-style-type: none">Форма 3 - активація даних у адмін панелі, авторизація</li>

            </div>

            <div class="list-group-item list-group-item-success">

                <h2 class="title">Форма 2</h2>
                <h1>ТИП реєстрації</h1>
                <div class="row">
                    <div class="col-md-2">
                        <div class="dropdown ">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Новий клієнт
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Зареєстрований клієнт
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="/create">1.1 Фіз. особа</a></li>
                                <li><a href="#">1.2 Юр. особа</a></li>
                                <li><a href="#">1.3 ФОП</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="list-group-item list-group-item-info">
                    В приложении нужно с помощью чистого PHP реализовать модель MVC.<br>
                    Фреймворки PHP использовать нельзя, библиотеки - можно.<br>
                    Верстка на bootstrap.<br>
                    К дизайну особых требований нет, должно выглядеть аккуратно.
            </div>

        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>