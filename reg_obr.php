<?php
header('Content-Type: text/html; charset=utf-8');

$name = $_POST["name"];
$lastname = $_POST["lastname"];
// $email = trim(mb_strtolower($_POST["email"]));
$email = $_POST["email"];
$pass = $_POST["pass"];
// $pass = trim($_POST["pass"]);
// $pass = password_hash($pass, PASSWORD_DEFAULT);


$host = "localhost";
$db = "ixiwdmmw_030";
$user = "ixiwdmmw_030";
$password = "123456qq";

$mysqli = mysqli_connect($host, $user, $password, $db);

 if ($mysqli == false) {
       print("Ошибка: Невозможно подключиться к MySQL "  . mysqli_connect_error());
 } else {
      //  print("Соединение установлено успешно");
       $result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
      //  var_dump($result->num_rows); 
      
       if ($result->num_rows!= 0) {
            print ("exist");
       } else {
      $mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) 
      VALUES ('$name', '$lastname', '$email', '$pass')");
      print("ок");
       }
      }
       
       



//       $result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email' --AND `pass`='$pass'");
//       // var_dump($result->num_rows);
      
//       if($result->num_rows != 0) {
//       print ("exist");
//       } else {
//             $mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) 
//             VALUES ('$name', '$lastname', '$email', '$pass')");
//             print("ok");
//       }
//  }

// $sql = "INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES (?, ?, ?, ?)";
// $stmt = $mysqli->prepare($sql);
// $stmt-> bind_param("ssss",$name, $lastname,$email, $pass);
// $stmt->execute();

// echo "<hr><br>имя: $name<br>
//       фамилия: $lastname<br>
//       email: $email<br>
//       пароль:$pass<br>";


      //	логин ixiwdmmw_030
      //    пароль 12345q
      //  localhost