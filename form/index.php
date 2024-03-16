<!-- подключение констант -->
<?php require_once("includes/connect.php") ?>
 <?php
    if(isset($_POST['submit'])) {
        if (!empty($_POST['name_org']) && !empty($_POST['name_sokr']) && 
            !empty($_POST['organization']) && !empty($_POST['position_ryk']) && 
            !empty($_POST['username']) && !empty($_POST['position_otv']) && 
            !empty($_POST['username_otv']) && !empty($_POST['number']) && 
            !empty($_POST['email'])) {
            $name_org = htmlspecialchars($_POST['name_org']);
            $name_sokr = htmlspecialchars($_POST['name_sokr']);
            $organization = htmlspecialchars($_POST['organization']);
            $position_ryk = htmlspecialchars($_POST['position_ryk']);
            $username = htmlspecialchars($_POST['username']);
            $position_otv = htmlspecialchars($_POST['position_otv']);
            $username_otv = htmlspecialchars($_POST['username_otv']);
            $number = htmlspecialchars($_POST['number']);
            $email = htmlspecialchars($_POST['email']);
          
            // проверка на правильность заполнения форм
            $query = mysqli_query($con, "SELECT * FROM users_id WHERE name_org='".$name_org."'");
            $numrows = mysqli_num_rows($query);

            if($numrows == 0) {
                $sql = "INSERT INTO users_id (name_org, name_sokr, organization, position_ryk, username, position_otv, username_otv, number, email) 
                VALUES ('$name_org', '$name_sokr', '$organization', '$position_ryk', '$username', '$position_otv', '$username_otv', '$number', '$email')";
                $result = mysqli_query($con, $sql);
                
                // Валидация
                if($result) {
                    $message = 'Аккаунт успешно создан';
                } else {
                    $message = 'Невозможно добавить в БД';
                }
            } else {
                $message = 'Введённое имя уже есть в БД. Нужно другое';
            }
        } else {
            $message = 'Все поля необходимо заполнить';
        }
    }
?>
<!-- Отображение валидации -->
<?php
    if(!empty($message)) {
        echo ('<p class="error">' . 'ВАЛИДАЦИЯ: ' . $message . '</p>');
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/form.css">
  </head>
<body>
  <!-- Шапка сайта -->
  <header>
    <a href="user.php"><div class="lk"><img src="img/User.svg" alt="пользователи"></div></a>
      <div class="t">федеральный проект</div>
      <div class="t2"><b>«Содействие занятости»</b></div>
  </header>
  <!-- начальный текст -->
   <div class="container">
     <form action="index.php" id="form" method="post" name="form">
      <div class="text_1">Уважаемые партнеры!</div>
      <div class="text_2">Просим вас пройти предварительную регистрацию для участия в проекте, реализуемом Институтом профессионального образования (ИРПО) в качестве федерального оператора федерального проекта «Содействие занятости» национального проекта «Демография».</div>
  <!-- форма -->
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Наименование организации</label>
          <input type="text" name="name_org" class="form-control" id="name_org" aria-describedby="emailHelp">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Наименование организации (сокращенное, в соответствии с Уставом)</label>
          <input type="text" name="name_sokr" class="form-control" id="name_sokr" aria-describedby="emailHelp">
        </div>
        <h4>Тип участника</h4>
        <div class="text_3">согласно классификации п. 2 проекта Порядка предварительного квалификационного отбора (ПКО) организаций, осуществляющих образовательную деятельность в субъектах Российской Федерации в рамках Проекта «Содействие занятости»!</div>
        <select class="form-select" name="organization" id="organization" aria-label="Пример выбора по умолчанию">
          <option selected>ЦО - центр обучения</option>
          <option value="РО - региональный оператор" id>РО - региональный оператор</option>
          <option value="РО - центр обучения">РО - центр обучения</option>
          <option value="ФОЦ - федеральный образовательный центр">ФОЦ - федеральный образовательный центр</option>
        </select>
        <div class="mb-3">
          <label for="text" class="form-label">Должность руководителя организации</label><br>
          <input type="text" name="position_ryk" id="position_ryk" class="form-text" >

          <label for="text" class="form-label">ФИО руководителя</label><br>
          <input type="text" name="username" id="username" class="form-text" >
      
          <label for="text" class="form-label">Должность ответственного лица</label><br>
          <input type="text"  name="position_otv" id="position_otv" class="form-text" >
    
          <label for="text" class="form-label">ФИО ответственного лица</label><br>
          <input type="text" name="username_otv" id="username_otv" class="form-text">
          
          <label for="text" class="form-label">Телефон</label><br>
          <input type="text" name="number" id="number" class="form-text">

          <label for="exampleInputEmail1" class="form-label">E-mail</label><br>
          <input type="email"  name="email" id="email" class="form-text"  aria-describedby="emailHelp">

          <button type="submit" id="submit" name="submit" class=" d-grid gap-2 col-6 mx-auto btn btn-outline-light">Отправить</button>      
        </div>
    </form>
   </div>
</body>
</html>