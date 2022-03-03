<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");
?>

<div class="centroform" >
<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Digite o Nome do Usuário</label>
    <div class="input-group">
      <div class="input-group-text">Nome</div>
      <input type="text" name="nomeUsu" class="form-control" id="inlineFormInputGroupUsername" placeholder="Nome do Usuário">
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
$nomeusu = isset($_POST["nomeUsu"])? $_POST["nomeUsu"] : ""; 

$dado = visuUsuarioNome($conn,$nomeusu);

foreach($dado as $nomeUsuarios):
?>
    <tr>
      <th scope="row"><?=$nomeUsuarios["idusu"];?></th>
      <td><?=$nomeUsuarios["nomeusu"]?></td>
      <td><?=$nomeUsuarios["emailusu"]?></td>
      <td><?=$nomeUsuarios["foneusu"]?></td>
    </tr>
<?php
endforeach;
?>   
    
  </tbody>
</table>

</div>


<?php
include_once("../view/footer.php");
?>