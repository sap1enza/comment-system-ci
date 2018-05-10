<br>
<div class="comment-container">

	<form>
		<div class="form-group">
			<label for="nome">Nome</label>
			<input class="form-control" id="nome" readonly="" value="<?= $this->session->userdata("user")['name'] ?>"></input>
		</div>
		<div class="form-group">
			<label for="comentario">Comentário</label>
			<textarea class="form-control" id="comentario" rows="3"></textarea>
		</div>
		<div class="form-group">
			<button type="button" class="btn btn-primary">Comentar</button>
			<button type="reset" class="btn btn-danger">Apagar</button>
		</div>
	</form>

</div>
</div>