<?php

include('conexao.php');

$idaluno = 1;
$sql = "delete from tbaluno where idaluno= '$idaluno'";

//conexao->query(comando sql)

$con->query($sql);

var_dump($con);