<?php

include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogoModel.php");
usarAcesso();
?>


<div class="container mt-5">

  <form action="#" method="Post" class="row row-cols-auto   justify-content-lg-center g-3 align-items-center">
    <div class="col-8">
      <label class="visually-hidden" for="inlineFormInputGroupUsername">Gênero do jogo</label>
      <div class="input-group">
        <div class="input-group-text">Gênero</div>
        <input type="text" name="generoJogo" class="form-control" id="inlineFormInputGroupUsername" placeholder="Genero do jogo">
      </div>
    </div>

    <div class="col-2">
      <button type="submit" class="btn btn-primary">Pesquisar</button>
    </div>
  </form>



  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Valor</th>
        <th scope="col">Gênero</th>
        <th scope="col">Capa</th>
        <th scope="col">Alterar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $generojogo = isset($_POST["generoJogo"]) ? $_POST["generoJogo"] : "";

      if ($generojogo) {

        $dado = visuJogoGenero($conn, $generojogo);

        foreach ($dado as $generoJogo) :
      ?>
          <tr>
            <th scope="row"><?= $generoJogo["idjogo"] ?></th>
            <td><?= $generoJogo["nomejogo"] ?></td>
            <td><?= $generoJogo["valorjogo"] ?></td>
            <td><?= $generoJogo["generojogo"] ?></td>
            <td><img width="50" height="50" src="<?= $generoJogo["imgjogo"] ?>"></td>
            <td>
              <form action="../view/alterarFormJogo.php" method="post">

                <input type="hidden" value="<?= $generoJogo["idjogo"] ?>" name="idjogo">
                <button type="submit" class="btn btn-primary">Alterar</button>

              </form>
            </td>

            <td>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger" codigo="<?= $generoJogo["idjogo"] ?>" nome="<?= $generoJogo["nomejogo"] ?>" data-bs-toggle="modal" data-bs-target="#deleteModal">
                Excluir
              </button>
            </td>

          </tr>
      <?php
        endforeach;
      }
      ?>
    </tbody>
  </table>

</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModal">Excluir jogo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        .
      </div>
      <div class="modal-footer">
        <form action="../controler/deletarJogo.php" method="get">

          <input type="hidden" value="" class="codigo from-control" name="codigojogo">
          <button type="submit" class="btn btn-danger">Excluir</button>

        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<script>
  var deletarUsuarioModal = document.getElementById('deleteModal');
  deletarUsuarioModal.addEventListener('show.bs.modal', function(event) {
    var button = event.relatedTarget;
    var codigo = button.getAttribute('codigo');
    var nome = button.getAttribute('nome');

    var modalBody = deletarUsuarioModal.querySelector('.modal-body');
    modalBody.textContent = 'Deseja realmente excluir o Jogo ' + nome + '?'

    var Codigo = deletarUsuarioModal.querySelector('.modal-footer .codigo');
    Codigo.value = codigo;

  })
</script>

<?php

include_once("../view/footer.php")

?>