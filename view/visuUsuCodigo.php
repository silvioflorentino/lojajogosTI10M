<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");
?>

<div class="container mt-5" >
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

<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Fone</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
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
      <td>
        <form action="../view/alterarform.php" method="POST">
          <input type="hidden" value="<?=$nomeUsuarios["idusu"]?>" name="codigousu">
          <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
        
      </td>
      <td>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
  Apagar
</button>

      </td>
    </tr>
  </tbody>
</table>

<?php
}
?>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModal">Exclusão de Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary">Sim</button>
      </div>
    </div>
  </div>
</div>


<?php
include_once("../view/footer.php");
?>