
<div id="comments"></div>


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
