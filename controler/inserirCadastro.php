<?php

include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");
extract($_REQUEST,EXTR_OVERWRITE);

if(inserirUsuario($conn,$nomeusu,$emailusu,$foneusu,$cpfusu,$tipousu,$cepusu,$numusu,$compleusu)){
echo("O Perfil foi cadastrado com sucesso!!");
}else{
echo("Não foi possível cadastrar seus dados!!");
}
include_once("../view/footer.php")
?>