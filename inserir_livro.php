<?php
          require("connect.php");

          $descricao = $_POST['c_descricao'];
          $quantidade = $_POST['c_quantidade'];
          $autor = $_POST['c_autor'];
          $tipo_capa = $_POST['tipo_capa'];
          $categoria_livro = $_POST['categoria_livro'];

          $sql = "INSERT INTO `item`(`quantidade`, `descricao`, `autor`, `tipo_capa`, `categoria_livro`) VALUES ('$quantidade', '$descricao', '$autor', '$tipo_capa', '$categoria_livro')";

          $resultado = mysqli_query($conexao, $sql);

          echo "inserido com sucesso";
?>
<p><a href="form_cadastrar_livro.html">Voltar</a>