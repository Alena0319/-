<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$host = "localhost";
$db = "ixiwdmmw_030";
$user = "ixiwdmmw_030";
$password = "123456qq";

$email = $_POST["email"];
$pass = $_POST["pass"];

$mysqli = mysqli_connect($host, $user, $password, $db);


if ($mysqli == false) {
      print("Ошибка: Невозможно подключиться к MySQL "  . mysqli_connect_error());
} else {
      //  print("Соединение установлено успешно");
      $result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");
      //  var_dump($result->num_rows); 

      if ($result->num_rows != 0) {
            print("exist");
      } else {
            $mysqli->query("INSERT INTO `users`(`email`, `pass`) 
      VALUES ('$email', '$pass')");
            print("ок");
      }
}

// $email = trim(mb_strtolower($_POST["email"]));
// $pass = trim($_POST["pass"]);

// $mysqli = mysqli_connect($host, $user, $password, $db);

// if ($mysqli == false) {
//       print("error");
// } else {
//       $result  = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
//       $result = $result->fetch_assoc();

//       if (password_verify($pass, $result["pass"])) {
//             echo "success";
//             $_SESSION["name"] = $result["name"];
//             $_SESSION["lastname"] = $result["lastname"];
//             $_SESSION["email"] = $result["email"];
//             $_SESSION["id"] = $result["id"];
//       } else {
//             echo "not_found";
//       }
// }