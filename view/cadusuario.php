<?php
include_once("header.php");
?>

<div class="container">
<form class="row g-3" action="../controler/inserirCadastro.php" method="Get">
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" name="nomeusu" class="form-control" id="inputNome">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" name="emailusu"class="form-control" id="inputEmail">
  </div>
  <div class="col-4">
    <label for="inputFone" class="form-label">Fone</label>
    <input type="text" name="foneusu" class="form-control" id="inputFone" placeholder="(11) 97877-5896">
  </div>
  <div class="col-4">
    <label for="inputCPF" class="form-label">CPF</label>
    <input type="text" name="cpfusu" class="form-control" id="inputCPF" placeholder="333.333.333-98">
  </div>
  <div class="col-md-4">
    <label for="inputTipo" class="form-label">Tipo de usuário</label>
    <select id="inputTipo" name="tipousu" class="form-select">
      <option selected>Escolha...</option>
      <option value="1">Funcionário</option>
      <option value="2">Cliente</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputCEP" class="form-label">CEP</label>
    <input type="text" name="cepusu" class="form-control" id="inputCEP">
  </div>
  <div class="col-md-2">
    <label for="inputNum" class="form-label">Número Casa</label>
    <input type="text" name="numusu"class="form-control" id="inputNum">
  </div>
  <div class="col-md-8">
    <label for="inputComple" class="form-label">Complemento</label>
    <input type="text" name="compleusu" class="form-control" id="inputComple">
  </div>
 

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Aceite os termos de uso do sistema de jogos
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>

</div>
<?php
include_once("footer.php");
?>
