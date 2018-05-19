<br>
<div class="comment-container">

		<?php echo form_open('comments/edit'); ?>

		<div class="form-group">
			<label for="nome">Nome</label>
			<input class="form-control" id="nome" readonly value="<?= $this->session->userdata("user")['name'] ?>"></input>
		</div>
		<div class="form-group">
			<label for="comentario">Comentário</label>
			<textarea class="form-control" id="comentario" name="comentario" rows="3" required><?php echo $comentario['comentario'] ?></textarea>
		</div>
		<input type="text" name="comentario_id" value="<?php echo $comentario['id'] ?>" hidden>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Salvar</button>
			<a href="<?php echo base_url(); ?>" class="btn btn-primary">Voltar</a>
		</div>
	</form>

</div>
</div>