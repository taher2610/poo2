<?php
$db=new database('blog');
$pdo = new PDO ('mysql:dbname=blog;host=localhost','root','');
die(var_dump (PDO::ATTR_ERRMODE));
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION)
$res=$pdo->query('select * from articles');
var_dump($res->fetchAll(PDO::fetch_obj));
$count=$pdo->exec('insert into articles set titre="Mon titre",date="'.date('y-m-d h-i-s').'"');
var_dump($count);
?>