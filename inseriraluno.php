<?php
//include / include_once
//require / require_once

include('conexao.php');

$aluno = "Pedro Henrique";
$turma = "3001";
$mensal = 790.98;

$sql = "insert into tblaluno (aluno,turma,mensal) values ('$aluno','$turma','$mensal')";

//conexão->query(comandosql)
$con->query($sql);

var_dump($con);
