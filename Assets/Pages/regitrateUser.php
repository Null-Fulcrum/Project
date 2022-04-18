<?php
  $lastname = $_POST['LastName'];
  $gender = $_POST['Gender'];
  $firstname = $_POST['FirstName'];
  $login = $_POST['login'];
  $password = $_POST['password'];
  $post = $_POST['post'];
  $location = $_POST['location'];
  $db = new mysqli('localhost','root','root','KanvenoDB');
  $db->query("insert into `User` (`LastName`,`FirstName`,`Login`,`Password`,`GenderID`,`Post`,`Location`) values ('$firstname','$lastname','$login','$password','$gender','$post','$location')");
  header('Location: /index.php');
 ?>
