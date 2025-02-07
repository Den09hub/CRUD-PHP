<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Recursos/css/bootstrap.min.css">

    <title>Cadastro de Usuário</title>
  </head>
  <body>
    <?php
      
      $pesquisa = $_POST['busca'] ?? '';

      include "../Conecxao/connect.php";

      $sql = "SELECT * FROM Usuarios WHERE nome_user LIKE '%$pesquisa%'"; 

      $dados = mysqli_query($conn, $sql);

    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar navbar-light bg-light">
                  <form class="form-inline" action="pesquisa_user.php" method="POST">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="busca" autofocus>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                  </form>
                </nav>

                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Nome</th>
                      <th scope="col">Email</th>
                      <th scope="col">Telefone</th>
                      <th scope="col">Funções</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                      while ($linha = mysqli_fetch_assoc($dados)) {
                        $id_user = $linha["id_user"];
                        $nome_user = $linha["nome_user"];
                        $email = $linha["email"];
                        $telefone = $linha["telefone"];

                        echo "<tr>
                                <td>$nome_user</td>
                                <td>$email</td>
                                <td>$telefone</td>
                                <td width=150px>
                                  <a href='cadastro_editar.php?id=$id_user' class='btn btn-success btn-sm'>Editar</a>
                                  <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma' 
                                  onclick=" . '"' . "pegar_dados($id_user, '$nome_user')" . '"' . ">Excluir</a>
                                </td>
                              </tr>";
                      }

                    ?>

                  </tbody>
                </table>

                <a href="../Tela_Inicio/index.php" class="btn btn-info">Voltar para o início</a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="excluir.php" method="POST">
            <p>Tem certeza que deseja excluir <b id="nome_user">Nome do Usuário</b>?</p>
          </div>
          <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                <input type="hidden" name="id" id="id_user" value="">
                <input type="hidden" name="nome" id="nome_user_1" value="">
                <input type="submit" class="btn btn-danger" value="Sim">
              </form>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      function pegar_dados(id, nome) {
        document.getElementById("nome_user").innerHTML = nome;
        document.getElementById("id_user").value = id;
        document.getElementById("nome_user_1").value = nome;
      }
    </script>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>