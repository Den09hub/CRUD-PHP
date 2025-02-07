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
    <div class="container">
        <div class="row">
            <?php
                include "../Conecxao/connect.php";

                $nome_user = $_POST["nome_user"];
                $email = $_POST["email"];
                $telefone = $_POST["telefone"];

                $sql = "INSERT INTO Usuarios (nome_user, email, telefone) VALUES ('$nome_user', '$email', '$telefone')";
                
                if (mysqli_query($conn, $sql)) {
                    Mensagem("$nome_user cadastrado com sucesso!", 'success');
                } else {
                    Mensagem("$nome_user não cadastrado!", 'danger');
                }

            ?>

            <hr>
            <a href="../Tela_Inicio/index.php" class="btn btn-primary">Voltar</a>

        </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/../Recursos/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>