<?php
$login = $_POST['login'];
$password = $_POST['password'];
  $db = new mysqli('localhost','root','root','KanvenoDB');
  $query = $db->query("select * from User U inner join Gender G on U.GenderID = G.id where U.Login = '$login' and U.Password = '$password'");
  $res = $query->fetch_assoc();
  $age = date('Y') - date('Y',strtotime($res['Birthday']));
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/mainpage.css">
    <link rel="stylesheet" href="/normalize.css">
    <title></title>
  </head>
  <body>
    <div class="main">
      <div class="main__ellipse main__ellipse-top">

      </div>
      <div class="main__ellipse main__ellipse-bottom">

      </div>
      <div class="content">
        <div class="main_title">
           <div class="main_title-logo">
             PROFILE
           </div>
           <div class="main_title-title">
              <div class="main_title-image">
                <img src="../images/logo0.svg" alt="">
              </div>
              <div class="main_title-name">
                KANVENO
              </div>
           </div>
        </div>
        <div class="grid-container">
          <div class="main_info">
            <div class="photo">
              <img src="../images/image.jpg" alt="">
            </div>
            <div class="FIO">
              <?php echo $res['LastName'];echo ' ';  echo $res['FirstName'];?>
            </div>
            <div class="gender">
              <?php echo $res['Title'] ?>
            </div>
            <div class="Location">
              <?php echo $res['Location']?>
            </div>
            <div class="age">
              <?php echo $age; ?>
            </div>
            <div class="post">
              <?php echo $res['Post'] ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </body>
</html>
