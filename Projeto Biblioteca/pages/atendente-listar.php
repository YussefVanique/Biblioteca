<h1>Listar Atendente</h1>
<?php
	$sql = "SELECT * FROM atendente AS a
			INNER JOIN biblioteca AS b
			ON b.id_biblioteca = a.biblioteca_id_biblioteca";

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

	if($qtd > 0){
		print "<table class='table table-striped table-hover table-bordered'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome da Biblioteca</th>";
		print "<th>Nome do Atendente</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_atendente."</td>";
			print "<td>".$row->nome_biblioteca."</td>";
			print "<td>".$row->nome_atendente."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=atendente-editar&id_atendente=".$row->id_atendente."';\">Editar</button>

						<button class='btn btn-dark' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=atendente-salvar&acao=excluir&id_atendente=".$row->id_atendente."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-dark'>Não há resultados</div>";
	}