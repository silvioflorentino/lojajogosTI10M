<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");
?>

<div class="centroform" >
<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Código do Usuário</label>
    <div class="input-group">
      <div class="input-group-text">Código</div>
      <input type="text" name="codUsu" class="form-control" id="inlineFormInputGroupUsername" placeholder="Digite o Código do Usuário">
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </div>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Fone</th>
    </tr>
  </thead>
  <tbody>
<?php
$codigousu = isset($_POST["codUsu"])? $_POST["codUsu"] : ""; 
if($codigousu){
$nomeUsuarios = visuUsuarioCodigo($conn, $codigousu);

?>
    <tr>
      <th scope="row"><?=$nomeUsuarios["idusu"];?></th>
      <td><?=$nomeUsuarios["nomeusu"]?></td>
      <td><?=$nomeUsuarios["emailusu"]?></td>
      <td><?=$nomeUsuarios["foneusu"]?></td>
    </tr>
  </tbody>
</table>
<?php
}
?>
</div>

<?php
include_once("../view/footer.php");
?>