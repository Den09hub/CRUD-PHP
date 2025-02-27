<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Recursos/css/bootstrap.min.css">

    <title>Alteração de Cadastro</title>
  </head>
  <body>

    <?php

    include "../Conecxao/connect.php";
    $id = $_GET["id"] ?? '';
    $sql = "SELECT * FROM Usuarios WHERE id_user = $id";

    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);

    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Alteração de Cadastro</h1>
                <form action="editar.php" method="POST">
                    <div class="form-group">
                        <label for="nome_user">Nome</label>
                        <input type="text" class="form-control" name="nome_user" required value="<?php echo $linha['nome_user']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" required value="<?php echo $linha['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="tel" class="form-control" name="telefone" required value="<?php echo $linha['telefone']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value='Salvar Alterações'>
                        <input type="hidden" name="id" value="<?php echo $linha['id_user']; ?>">
                    </div>
                </form>
                <a href="../Tela_Inicio/index.php" class="btn btn-info">Voltar para o início</a>
            </div>
        </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>