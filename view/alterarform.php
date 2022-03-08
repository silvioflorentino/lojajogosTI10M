<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");

extract($_REQUEST,EXTR_OVERWRITE);

$informa = visuUsuarioCodigo($conn, $codigousu);

?>

<div class="container">
<form class="row g-3" action="../controler/alterarUsuario.php" method="post">
    <input type="hidden" name="codigousu" value="<?=$informa["idusu"]?>">
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" name="nomeusu" value="<?=$informa["nomeusu"]?>" class="form-control" id="inputNome">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" name="emailusu" value="<?=$informa["emailusu"]?>"class="form-control" id="inputEmail">
  </div>
  <div class="col-4">
    <label for="inputFone" class="form-label">Fone</label>
    <input type="text" name="foneusu" value="<?=$informa["foneusu"]?>" class="form-control" id="inputFone" placeholder="(11) 97877-5896">
  </div>
  <div class="col-4">
    <label for="inputCPF" class="form-label">CPF</label>
    <input type="text" name="cpfusu" value="<?=$informa["cpfusu"]?>" class="form-control" id="inputCPF" placeholder="333.333.333-98">
  </div>
  <div class="col-md-4">
    <label for="inputTipo" class="form-label">Tipo de usuário</label>
    <select id="inputTipo" name="tipousu" class="form-select">
      <option selected value="<?=$informa["tipousu"]?>">
      
      <?php
      if($informa["tipousu"] == "1")
      echo("Funcionário");
        else
      echo("Cliente");
      ?>
      </option>

      <?php
      if($informa["tipousu"] == "2")
      echo("<option value=1>Funcionário</option>");
        else
      echo("<option value=2>Cliente</option>");
      ?>
      
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputCEP" class="form-label">CEP</label>
    <input type="text" name="cepusu" value="<?=$informa["cepusu"]?>" class="form-control" id="inputCEP">
  </div>
  <div class="col-md-2">
    <label for="inputNum" class="form-label">Número Casa</label>
    <input type="text" name="numusu" value="<?=$informa["numusu"]?>" class="form-control" id="inputNum">
  </div>
  <div class="col-md-8">
    <label for="inputComple" class="form-label">Complemento</label>
    <input type="text" name="compleusu" value="<?=$informa["compleusu"]?>" class="form-control" id="inputComple">
  </div>
 


  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>

</div>
<?php
include_once("footer.php");
?>
