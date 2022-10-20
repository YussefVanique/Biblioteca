<?php 

     $sql = "SELECT * FROM reserva WHERE id_reserva=".$_REQUEST['id_reserva'];

     $res= $conn->query($sql) or die ($conn->error);

     $row = $res->fetch_object();
 ?>


<h1>Editar Reserva</h1>

<form action="?page=reserva-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_reserva" value="<?php print $row->id_reserva; ?>">
    <div class = "mb-3">

        <label>Aluno</label>
        <select name = "aluno_idaluno" class="form-control" value="<?php print $row->aluno_idaluno;?>">
        <?php 

            $sql = "SELECT * FROM aluno";

            $res = $conn->query($sql) or die ($conn->error);
            
            if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					print "<option value='".$row->idaluno."'>";
					print $row->nome_aluno."</option>";
				}
			}else{
				print "Não há alunos cadastrados";
			}
        ?>
        </select>
    </div>

    <div class = "mb-3">
        <label>Livro</label>
        <select name = "livro_id_livro" class="form-control" value="<?php print $row->livro_id_livro;?>">
        <?php 

            $sql = "SELECT * FROM livro";

            $res = $conn->query($sql) or die ($conn->error);

            if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_livro."'>";
					print $row->titulo_livro."</option>";
				}
			}else{
				print "Não há livros cadastradas";
			}
        ?>
        </select>
    </div>


    <div class = "mb-3">
<label>Atendente</label>
<select name = "atendente_id_atendente" class="form-control" value="<?php print $row->atendente_id_atendente;?>">
<?php 

    $sql = "SELECT * FROM atendente";

    $res = $conn->query($sql) or die ($conn->error);

    if($res->num_rows > 0){
        while($row = $res->fetch_object()){
            print "<option value='".$row->id_atendente."'>";
            print $row->nome_atendente."</option>";
        }
    }else{
        print "Não há atendentes cadastrados";
    }
?>
</select>
</div>

 
<?php
     $sql = "SELECT * FROM reserva WHERE id_reserva=".$_REQUEST['id_reserva'];

     $res= $conn->query($sql) or die ($conn->error);

     $row = $res->fetch_object();
 ?>


<div class="mb-3">
        <label>Data Empréstimo</label>
        <input type="date" name="data_emprestimo" class="form-control" value="<?php print $row->data_emprestimo; ?>">
</div>



<div class="mb-3">
        <label>Data Devolução </label>
        <input type="date" name="data_devolucao" class="form-control" value="<?php print $row->data_devolucao; ?>">
</div>

<div class="mb-3">
		<button type="submit" class="btn btn-dark">Editar</button>
	</div>

</form>