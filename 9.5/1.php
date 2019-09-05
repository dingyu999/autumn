<?php
$id=$_GET('id');
$content=$_GET('content');
$pdo= new PDO('mysql:host=127.0.0.1;dbname=september','root','root');
$data=$pdo->exec('insert into message values("$id","$content")');


?>