<?php
$cookie_name = "Пользователь";
$cookie_value = "Иван Петров";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>

<body>

   <?php
   if (!isset($_COOKIE[$cookie_name])) {
      echo "Cookie по имени'" . $cookie_name . "' не задан!";
   } else {
      echo "Cookie '" . $cookie_name . "' задан!<br>";
      echo "Значение: " . $_COOKIE[$cookie_name];
   }
   ?>

</body>

</html>