<?php

  $connect = mysql_connect('localhost', 'root', ''); // mysql_connect('HOST or HOST:PORT', 'MYSQL Username', 'MYSQL Password')
  if (!$connect) {
    die('Could not connect: ' . mysql_error());
  }
  echo 'Connected successfully';
  mysql_close($connect);

?>
