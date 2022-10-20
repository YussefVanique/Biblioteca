<h1>Cadastrar Categoria</h1>

<form action="?page=categoria-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
        <label>Categorias </label>
        <input type="text" name="nome_categoria" class="form-control">
    </div>
	
	<div class="mb-3">
		<button type="submit" class="btn btn-dark">Cadastrar</button>
	</div>
</form>