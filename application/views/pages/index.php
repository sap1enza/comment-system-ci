<div class="comment-container">
	<div class="media comment-box">
	<div class="media-left">
		<a href="#">
			<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
		</a>
	</div>
	<div class="media-body">
		<h5 class="media-heading">Lucas Sapienza</h5>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essen</p>

	</div>
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="signupModalTitle">Cadastro</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="signForm">
					<span id="signErrors"></span>
					<div class="form-group">
						<label for="name">Nome Completo</label>
						<input type="text" class="form-control" id="mdName" name="name" placeholder="Pedro Álvares Cabral">
						<?php echo form_error('name'); ?>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="mdEmail" name="email" placeholder="pealvares@contato.com.br">
					</div>
					<div class="form-group">
						<label for="password">Senha</label>
						<input type="password" class="form-control" id="mdPassword" name="password" placeholder="*******">
					</div>

					<div class="form-group">
						<label for="gender">Sexo</label>
						<select class="form-control" id="gender" name="gender">
							<option disabled selected value>Selecione uma opção</option>
							<option>Masculino</option>
							<option>Feminino</option>
							<option>Outro</option>
						</select>
					</div> 
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeModal">Fechar</button>
						<button type="submit" class="btn btn-success">Cadastrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
