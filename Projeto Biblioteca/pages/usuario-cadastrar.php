<h1>Cadastrar Usuário</h1>

<form action="?page=usuario-salvar" method="POST">
    <input type="hidden" name="acao2" value = "listar">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_aluno" class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email_aluno" class="form-control">
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="number" name="fone_aluno" class="form-control">
    </div>

    <div class="mb-3">
        <label>RGM</label>
        <input type="number" name="rgm_aluno" class="form-control">
    </div>

    <div class="mb-3">
        <label>Nascimento</label>
        <input type="date" name="data_nasc_aluno" class="form-control">
    </div>

    <div class="mb-3">
        <label>Genêro</label>
        <select class="form-control" name="genero_aluno">
            <option>Masculino</option>
            <option>Feminino</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="end_aluno" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-dark">Enviar</button>
    </div>



</form>




