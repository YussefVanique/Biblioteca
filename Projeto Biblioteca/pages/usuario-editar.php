<h1>Editar Usuário</h1>
<?php

  $sql = "SELECT *FROM aluno WHERE idaluno=".$_REQUEST['idaluno'];
  $res = $conn->query($sql) or die ($conn->error);
  $row = $res->fetch_object();


?>

<form action="?page=usuario-salvar" method="POST">
    <input type="hidden" name="acao2" value = "editar">
    <input type="hidden" name="idaluno" value ="<?php print $row->idaluno;?>">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_aluno" class="form-control" value = "<?php print $row->nome_aluno;?>">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email_aluno" class="form-control" value = <?php print $row->email_aluno;?>>
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="number" name="fone_aluno" class="form-control" value = <?php print $row->fone_aluno;?>>
    </div>

    <div class="mb-3">
        <label>RGM</label>
        <input type="number" name="rgm_aluno" class="form-control" value = <?php print $row->rgm_aluno;?>>
    </div>

    <div class="mb-3">
        <label>Nascimento</label>
        <input type="date" name="data_nasc_aluno" class="form-control" value = <?php print $row->data_nasc_aluno;?>>
    </div>

    <div class="mb-3">
        <label>Genêro</label>
        <select class="form-control" name="genero_aluno" value = <?php print $row->genero_aluno;?>>>
            <option>Masculino</option>
            <option>Feminino</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="end_aluno" class="form-control" value = <?php print $row->end_aluno;?>>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-dark">Editar</button>
    </div>



</form>