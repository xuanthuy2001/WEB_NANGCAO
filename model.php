<?php

$connect = mysqli_connect('localhost', 'root', '', 'WEB_NANGCAO');
mysqli_set_charset($connect, 'utf8');

$sql = "SELECT * FROM mon_an where ten = '$mon'";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);
