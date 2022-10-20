<?php
 
$sql = "SELECT * FROM livro WHERE id_livro=".$_REQUEST['id_livro'];

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();


?>
<h1>Editar Livro</h1>

<form action="?page=livro-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_livro" value="<?php print $row->id_livro; ?>">
    
	<div class="mb-3">
		<label>Categoria ID</label>
		<select name="categoria_id_categoria" class="form-control" value="<?php print $row->categoria_id_categoria;?>">
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

		<?php
		
		$sql = "SELECT * FROM livro WHERE id_livro=".$_REQUEST['id_livro'];

		$res = $conn->query($sql) or die ($conn->error);
		$row = $res->fetch_object();
		?>
		</select>
	</div>
	<div class="mb-3">
		<label>Titulo do livro</label>
		<input type="text" name="titulo_livro" class="form-control" value="<?php echo $row->titulo_livro; ?>" >
	</div>
    <div class="mb-3">
		<label>Autor livro</label>
		<input type="text" name="autor_livro"  class="form-control" value="<?php echo $row->autor_livro; ?>" >
    <div class="mb-3">
		<label>Editora do livro</label>
		<input type="text" name="editora_livro"  class="form-control" value="<?php echo $row->editora_livro; ?>" >
	</div>
    <div class="mb-3">
		<label>Edição do livro</label>
		<input type="text" name="edicao_livro" class="form-control" value="<?php echo $row->edicao_livro; ?>" >
    <div class="mb-3">
		<label>Localidade</label>
		<input type="text" name="localidade_livro"  class="form-control" value="<?php echo $row->localidade_livro; ?>" >
    <div class="mb-3">
		<label>Ano do livro</label>
		<input type="text" name="ano_livro"  class="form-control" value="<?php echo $row->ano_livro; ?>" >
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-dark">Editar</button>
		
	</div>