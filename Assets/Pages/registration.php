
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/registration.css">
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
             REGISTRATION
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
        <div class="registrate_form">
          <form class="" action="regitrateUser.php" method="post">
            <input type="text" id="LastName" name="LastName" placeholder="LastName" value="">
            <input type="text" id="FirstName" name="FirstName" placeholder="FirstName" value="">
            <input type="text" id="login" name="login" placeholder="Login" value="">
            <input type="text" id="password" name="password" placeholder="Password" value="">
            <input type="text" id="post" name="post" placeholder="Post" value="">
            <input type="text" id="location" name="location" placeholder="location" value="">
            <select class="Gender" name="Gender">
              <option value="1">Male</option>
              <option value="2">Female</option>
            </select>
            <input type="date" id="Birthday" name="Birthday" placeholder="Birthday" value="">
            <input type="Submit" name="" value="Registrate">
          </form>
        </div>

      </div>
    </div>
  </body>
</html>
