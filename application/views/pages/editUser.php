<br>
<div class="comment-container">


		<h4>Editar Perfil</h4>
		<hr>

		<?php echo form_open('users/update'); ?>

		<div class="form-group">
			<label for="nome">Nome</label>
			<input class="form-control" id="nome" value="<?= $userdata['nome'] ?>" name="nome"></input>
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input class="form-control" id="email" value="<?= $userdata['email'] ?>" name="email"></input>
		</div>
		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="password" class="form-control" id="senha" name="senha" placeholder="Deixe em branco se não quiser alterar"></input>
		</div>
		<input type="text" name="id_user" value="<?= $userdata['id'] ?>" hidden>		
		<div class="form-group">
			<button type="submit" class="btn btn-success">Salvar</button>
			<a href="<?php echo base_url(); ?>" class="btn btn-primary">Voltar</a>
		</div>
	</form>

</div>
</div>