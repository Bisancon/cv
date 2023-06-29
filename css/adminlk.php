<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/adminlk.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">
  <title>Панель администратора</title>
</head>

<body>

    <headertop>
      <div class="header_top">
        <div class="container">
          <div class="header__contacts">
            <a class="header__phone" href="tel:89030040402">+7 (903) 004 04 02</a>
            <a class="header__email" href="#">grandhotel@gmail.com</a>
            <a class="header_btn" href="index.php">Главная</a>
          </div>
        </div>
      </div>
      </headertop>
      <main>


<div class="Name-panel">
        <div class="admin-text">
        ПАНЕЛЬ АДМИНИСТРАТОРА
      </div>
      <div class="admin-text2">
            Добро пожаловать
          </div>
        </div>

  <div class="admin_data">
    <div class="admin-info1">
      Полное имя:
        <div class="admin-info"><b></b> <?php echo $_SESSION['logged_user']->surename; ?></div>
      </div>

    </div>
      <div class="admin_data2">
        <div class="admin-info2">
          Логин:
          <div class="admin-info"><b></b> <?php echo $_SESSION['logged_user']->name; ?></div>
        </div>
      <div class="admin-info3">
        Email:
        <div class="admin-info"><b></b> <?php echo $_SESSION['logged_user']->name_auto; ?></div>
      </div>
    </div>


      <div class="applications">

        <div class="containers">
          <a style="display:inline-block;" >
            <div class="items">
              <div class="icon-wrapper">
                <i class="fa fa-gavel"></i>
              </div>
              <div class="project-name">
                <a href="viewtrips.php" class="about__btn">Заявки на бронирование</a>
                <a href="viewtrips.php" class="about__btn_exit" >Выйти</a>
              </div>

            </div>
          </a>


        </div>

      </div>


  </main>








</body>

</html>
