<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 7.5. Удаление данных из таблицы MySQL. Оператор DELETE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>

<body>
    <main>
        <header>
            <h1>
                Урок 7.5. Удаление данных из таблицы MySQL. Оператор DELETE
            </h1>
            <h4 class="subtitle">
                В этом уроке вы узнаете как удалить данные из таблицы MySQL с помощью языка SQL и PHP.
            </h4>
        </header>
        <section class="code_php">
            <?php
            $nickname = "Александр!";
            $hello = "Привет ";
            $offer = "Продолжаем изучение операторов MySQL и работу с ними в PHP<br>
                        Узнаем как удалить данные из таблицы MySQL с помощью языка SQL и PHP";
            echo "<h2 class='ncname'>" . $hello . $nickname . "<br>" . "<br>" . $offer . "<br>";
            ?>
        </section>
        <section class="begin">
            <p>
                На данном уроке рассмотрим как удалять данные из таблицы БД.<br>
                Если возникла необходимость удалить данные из БД, то испоьзуем для этого оерпатор DELETE.
            </p>
            <p>
                Перед тем как начать снова подключаемся к нашей таблице movie БД, как ранних уроках, а именно:<br>
                ?php<br>
                $mysqi = new mysqli('localhost', 'root', '', 'study7.2lesson');<br>
                if (mysqli_connect_errno()) {<br>
                printf("Соединение не установлено", mysqli_connect_error());<br>
                exit();<br>
                }<br>
                $mysqi->set_charset('utf8');<br>

                $mysqi->close();
                ?>
            </p>
            <p>
                Синтаксис у оператора DELETE простой:<br>
                DELETE FROM имя-таблицы;<br>
                WHERE условия удаления.<br>
                То есть DELETE FROM имя-таблицы, эта запись указывает что из таблицы movie(в нашем случаи) необходимо удалить данные. Далее после WHERE указываем откуда удалить - в нашем случаи id=3.
            </p>
        </section>
        <section class="main_part">
            <p>
                Для работы с оператором внова создаем переменну $query и далее пишем в ней содержимое DELETE FROM movie WHERE id=3.<br>
                Т.е. мы написали что необходимо удалить данные из таблицы movie с id имеющим порядковый номер 3.<br>
                Вот как должен выглядеть наш код:<br>
                $query="DELETE FROM movie WHERE id=3";<br>
            </p>
            <p>
                Теперь все данные будут удалены из строки с id-3 из нашей таблицы movie в БД
            </p>
            <p>
                Полностью наш код должен выглядеть следующим образом:<br>
                ?php<br>
                $mysqi = new mysqli('localhost', 'root', '', 'study7.2lesson');<br>
                if (mysqli_connect_errno()) {<br>
                printf("Соединение не установлено", mysqli_connect_error());<br>
                exit();<br>
                }<br>
                $mysqi->set_charset('utf8');<br>

                $query="DELETE FROM movie WHERE id=3";<br>
                $mysqi->query($query);<br>

                $mysqi->close();<br>
                ?>
            </p>
        </section>
        <section class="code_php">
            <p>
                Теперь пишем код на PHP ниже.<br>
                Затем заходим в панель управления MyAdminPHP и смотрим как были удалены данные мз указанной строки в нашей таблице movie БД.
            </p>
            <?php
            $mysqi = new mysqli('localhost', 'root', '', 'study7.2lesson');
            if (mysqli_connect_errno()) {
                printf("Соединение не установлено", mysqli_connect_error());
                exit();
            }
            $mysqi->set_charset('utf8');

            $query = "DELETE FROM movie WHERE id=3";
            $mysqi->query($query);

            $mysqi->close();
            ?>

        </section>
    </main>

</body>

</html>