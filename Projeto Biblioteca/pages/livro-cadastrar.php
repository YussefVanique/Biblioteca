<h1>Cadastrar Livro</h1>

<form action="?page=livro-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Categoria ID</label>
		<select name="categoria_id_categoria" class="form-control">
			<option>Escolha a categoria</option>
		<?php
			$sql = "SELECT * FROM categoria";

			$res = $conn->query($sql) or die($conn->error);

			if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_categoria."'>";
					print $row->nome_categoria."</option>";
				}
			}else{
				print "Não há categorias cadastradas";
			}
		?>
		</select>
	</div>
	<div class="mb-3">
		<label>Titulo do livro</label>
		<input type="text" name="titulo_livro" class="form-control">
	</div>
    <div class="mb-3">
		<label>Autor livro</label>
		<input type="text" name="autor_livro" class="form-control">
	</div>
    <div class="mb-3">
		<label>Editora do livro</label>
		<input type="text" name="editora_livro" class="form-control">
	</div>
    <div class="mb-3">
		<label>Edição do livro</label>
		<input type="text" name="edicao_livro" class="form-control">
	</div>
    <div class="mb-3">
		<label>Localidade</label>
		<input type="text" name="localidade_livro" class="form-control">
	</div>
    <div class="mb-3">
		<label>Ano do livro</label>
		<input type="text" name="ano_livro" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-dark">Enviar</button>
		
	</div>