<?php

  $sql = "SELECT *FROM categoria WHERE id_categoria=".$_REQUEST['id_categoria'];
  $res = $conn->query($sql) or die ($conn->error);
  $row = $res->fetch_object();


?>

<h1>Editar Categoria</h1>

<form action="?page=categoria-salvar" method="POST">

	<input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_categoria" value="<?php print $row->id_categoria; ?>">

	<div class="mb-3">
        <label>Categorias</label>
        <input type="text" name="nome_categoria" class="form-control" value="<?php print $row->nome_categoria; ?>">
    </div>
	
	<div class="mb-3">
		<button type="submit" class="btn btn-dark">Editar</button>
	</div>
</form>