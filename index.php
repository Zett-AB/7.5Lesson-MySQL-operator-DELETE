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

                $mysqi->close();<br </p>
            <p></p>
            <p></p>
        </section>
        <section></section>
    </main>

</body>

</html>