<h1>Editar Atendente</h1>
<?php
	$sql = "SELECT * FROM atendente WHERE id_atendente=".$_REQUEST["id_atendente"];

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();
	

?>
<form action="?page=atendente-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_atendente" value="<?php print $row->id_atendente; ?>">
	<div class="mb-3">
		<label>Nome do Atendente</label>
		<input type="text" name="nome_atendente" value="<?php print $row->nome_atendente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Biblioteca</label>
		<select name="biblioteca_id_biblioteca" class="form-control">
			<option>Escolha a Biblioteca</option>
		<?php
			$sql = "SELECT * FROM biblioteca";

			$res = $conn->query($sql) or die($conn->error);

			if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_biblioteca."'>";
					print $row->nome_biblioteca."</option>";
				}
			}else{
				print "Não há bibliotecas cadastradas";
			}
		?>
		</select>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Editar</button>
	</div>
</form>