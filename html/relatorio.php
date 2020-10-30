<html>
<head>
<title>Relat&oacute;rio de Produtos </title>
<?php include ('config.php');  ?>
</head>

<body>
<form action="relatorio.php?botao=cadastrar" method="post" name="form1">
<table width="95%" border="1" align="center">
  <tr>
    <td colspan=5 align="center">Relat&oacute;rio de Produtos</td>
  </tr>
  <tr>
    <td width="18%" align="right">Nome:</td>
    <td width="26%"><input type="text" name="name"  /></td>
    <td width="17%" align="right">Categoria:</td>
    <td width="18%"><input type="text" name="category" size="3" /></td>
    <td width="21%"><input type="submit" name="botao" value="Gerar" /></td>
  </tr>
</table>
</form>

<?php if (@$_REQUEST['botao'] == "Gerar") { ?>

<table width="95%" border="1" align="center">
  <tr bgcolor="#9999FF">
    <th width="5%">C&oacute;d</th>
    <th width="30%">Nome</th>
    <th width="15%">Descrição</th>
    <th width="12%">Valor</th>
    <th width="12%">Categoria</th>
  </tr>

<?php

	$name = $_POST['name'];
	$category = $_POST['category'];
	
	$query = "SELECT *
			  FROM cadastro_produto
              WHERE id > 0 ";
    $query .= ($name ? " AND nome LIKE '%$nome%' " : "");
    $query .= ($category ? " AND categoria = '$category' " : "");
	$query .= " ORDER by id";
	$result = mysqli_query($con, $query);

/*	
	echo "<pre>";
	echo $query;
	echo mysql_error();
	echo "</pre>";
*/
	while ($coluna=mysqli_fetch_array($result)) 
	{
		
	?>

    
    <tr>
      <th width="5%"><?php echo $coluna['id']; ?></th>
      <th width="30%"><?php echo $coluna['nome']; ?></th>
      <th width="15%"><?php echo $coluna['descricao']; ?></th>
      <th width="12%"><?php echo $coluna['valor']; ?></th>
      <th width="12%"><?php echo $coluna['categoria']; ?></th>
        <td>
        <a 
            href="index.php?pag=cliente&id=<?php echo $coluna['id']; ?>"
            >editar</a>
        </td>

    </tr>

    <?php
	
	} // fim while
?>
</table>
<?php	
}
?>
</body>