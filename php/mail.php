<?php
  $to = "dbinky.cz@gmail.com";
  $theme = "Тема сообщения: ".$_POST['subject'];
  $message = "Имя отправителя: ".$_POST['name']. "<br>";
  $message = "<p>" .$_POST['message'];
?>
