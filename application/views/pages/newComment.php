<br>
<div class="comment-container">


		
		<?php echo form_open('comments/new'); ?>

		<div class="form-group">
			<label for="nome">Nome</label>
			<input class="form-control" id="nome" readonly="" value="<?= $this->session->userdata("user")['name'] ?>"></input>
		</div>
		<div class="form-group">
			<label for="comentario">Comentário</label>
			<textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
		</div>
		<b><?php echo form_error("comentario"); ?></b>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Comentar</button>
			<button type="reset" class="btn btn-danger">Apagar</button>
		</div>
	</form>

</div>
</div>