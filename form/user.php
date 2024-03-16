<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пользователи</title>
    <link rel="stylesheet" href="style/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
                        <!-- Создание таблицы для отображения записей -->
                    <div class="wrapper">
                            <div class="container-fluid">
                                <div class="row">
                                    <h2 class="text-center">Список записей</h2>
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-between">
                                            <h2 class="pull-left">Пользователи</h2>
                                            <a href="index.php" class="btn btn-success">Назад</a>
                                        </div>
                                        
                                        <?php
                    // подключаем конфигурационный файл
                    require_once("includes/connect.php");

                    // выбрать всех пользователей
                    $data = "SELECT * FROM users_id";
                    if($users = mysqli_query($con, $data)) {
                        if(mysqli_num_rows($users) > 0 ) {
                            echo "<table class='table table-bordered table-striped'>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Наименование организации</th>
                                        <th>Сокращённое наименование</th>
                                        <th>Тип участника</th>
                                        <th>Должность руководителяя организации</th>
                                        <th>ФИО руководителя</th>
                                        <th>Должность ответственного лица</th>
                                        <th>ФИО ответсвенного лица</th>
                                        <th>Телефон</th>
                                        <th>E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>";
                            while($user = mysqli_fetch_array($users)) {
                                echo "<tr>
                                            <td>" . $user['id']   . "</td>
                                            <td>" . $user['name_org']   . "</td>
                                            <td>" . $user['name_sokr']   . "</td>
                                            <td>" . $user['organization']   . "</td>
                                            <td>" . $user['position_ryk']   . "</td>
                                            <td>" . $user['username']   . "</td>
                                            <td>" . $user['position_otv']   . "</td>
                                            <td>" . $user['username_otv']   . "</td>
                                            <td>" . $user['number']   . "</td>
                                            <td>" . $user['email']   . "</td>
                                    </tr>";
                                }
                                echo "</tbody>
                                        </table>";
                                    mysqli_free_result($users);
                            } else {
                                echo "<p class='lead'><em>В базе данных отсутствуют записи.</em></p>";
                            }
                        } else {
                            echo "Невозможно выполнить запрос $data. " . mysqli_error($con);
                        }
                        // завершить соединение
                        mysqli_close($con);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>