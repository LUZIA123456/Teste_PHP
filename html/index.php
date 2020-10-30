<html lang="pt-br">
<head>
    <!--<meta charset="utf-8">-->
    <link rel="stylesheet" href="../css/style.css">
    <title> Cadastro de Produtos </title>
</head>

<body>
<?php    
    
 include('config.php');
 @$name = $_POST['name'];
 @$description = $_POST['description'];
 @$price = $_POST['price'];
 @$category= $_POST['category'];
 @$cod = @$_REQUEST['id'];
    // clique do botao Cadastrar
if (@$_REQUEST['botao']=="Cadastrar")
{
 $query = "INSERT INTO cadastro_produto (nome, descricao, valor, categoria) VALUES ('{$name}', '{$description}', '{$price}', '{$category}') ";
 $result_insere = mysqli_query($con, $query); 
     if ($result_insere) echo "<h2> Registro inserido com sucesso!!!</h2>"; 
     else echo "<h2> Não consegui Inserir </h2>"; 
    }

if (@$_REQUEST['botao'] == "Deletar") {
    $cod = @$_REQUEST['id'];
    @$query_excluir = "
    DELETE FROM cadastro_produto WHERE id='$cod'
    ";
    $result_excluir = mysqli_query($con, $query_excluir);
    
        if ($result_excluir) echo "<h2> Registro excluido com sucesso!!!</h2>";
        else echo "<h2> Nao consegui excluir!!!</h2>";
    }
if (@$_REQUEST['botao'] == "Atualizar") {

     $query = "UPDATE cadastro_produto SET (nome = '$name', descricao = '$description', valor = '$price', categoria = '$category' WHERE id = $cod) ";
     $result_insere = mysqli_query($con, $query); 
     if ($result_insere) echo "<h2> Registro inserido com sucesso!!!</h2>"; 
     else echo "<h2> Não consegui Atualizar </h2>"; 

}
 ?>
  <!-- Início Corpo -->
    <div class="formulario_cadastro">
        <center> <br>
            <label class="titulo_form"> Preencha o formulário abaixo para cadastrar um novo produto</label><br><br> <!-- Preencher nomes das varíaveis do banco -->
            <form enctype="multipart/form-data" action="#" method="post">
                <label class="subtitulo_form"> Cadastro de Produtos: </label><br><br>
                <label class="fonte_form">Nome Produto: </label><br><input class="form" type=text name="name"> <br><br>
                <label class="fonte_form">Descrição do Produto: </label><br><input class="form" type=text name="description"><br><br>
                <label class="fonte_form">Valor: </label><br><input class="form" type=text name="price"> <br><br>
                <select id="" name="category" class="form" required>
                <label class="fonte_form">Por favor, informe a categoria: <br>
                        <option value="category" selected></option>
                        <option value="1">Movéis</option>
                        <option value="2">Decoração</option>
                        <option value="3">Celular</option>
                        <option value="4">Informática</option>
                        <option value="5">Brinquedos</option>
                </select><br><br>
                <input type="submit" name="botao" class="botao" value="Cadastrar"> - 
                <input type="submit" name="botao" class="botao" value="Deletar"> - 
                <input type="submit" name="botao" class="botao" value="Atualizar">-
                <a href="relatorio.php"class="botao">Relatorio</a>  
                    
            </form>
        </center> <br>
    </div>
    <!-- Fim Corpo -->
    <!--Início Rodapé -->	
<div class="rodape">
	<table>
		<tr>
			<td class="rodape_redes"> <h5 class="rodape_copyright"> © <a href="www.instagram.com/luzia_souza_lulu" class="copyright" title="@luzia_souza_lulu" target="blank">Luzia</a> - 2019 </h5> </td>
		</tr>
	</table>
</div>
<!-- Fim Rodapé -->
 </body>
                </html>