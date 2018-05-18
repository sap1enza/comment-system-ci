<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?= base_url("public/css/bootstrap.css?".time()) ?>">
	<link rel="stylesheet" href="<?= base_url("public/css/style.css?".time()) ?>">
	<title>CRUD CodeIgniter</title>
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">SapiCRUD v1.0</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">  				
				
				<li class="userdata">  					  						
					<a class="btn btn-light" href="<?= base_url(); ?>">Home</a> 				
				</li>
				
				<?php if($this->session->userdata("user")['logged']) : ?>
					<li class="userdata">  					  						
						<a class="btn btn-light" href="<?= base_url('pages/new/comment') ?>">Novo Comentário</a> 				
					</li>
				<?php endif ?>

			</ul>
			<div>
				<li class="userdata">
					<?php if($this->session->userdata("user")['logged']) : ?>		
						<span class="btn">Olá, <b><?= $this->session->userdata("user")['firstname'] ?></b></span>
						<a href="<?= base_url("Users/logout") ?>" class="btn btn-sm btn-danger">Sair</a>  							
					<?php else: ?>
						<!-- FORM LOGIN -->
						<?php print_r($this->session->tempdata('logform')); ?>
						<form id="logForm" action="Users/auth/" method="POST"> 
							
							<div class="form-row">
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Email" id="lgEmail" name="email">
								</div>
								<div class="col-auto">
									<input type="password" class="form-control" placeholder="Senha" id="lgSenha" name="senha">
								</div>
								<div class="col">
									<button type="submit" class="btn btn-primary">Entrar</button>
								</div>
								<div class="col-auto">
									<button type="button" class="btn btn-success" data-toggle="modal" data-target="#signupModal" id="btnSignupModal">Cadastrar-se</button>
								</div>
								
							</div>
						</form>
						
						<!-- END FORM LOGIN -->
					<?php endif ?>
				</li>
			</div>
		</div>
	</nav>
	
	<div class="container">
		
		