<?php
require_once '../../controllers/UsuarioController.php';

$usuario = new UsuarioController();

$usuarios = $usuario->index();


?>
<!doctype html>
<html lang="pt-Br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="col">
			<br>
			<?php
			if (isset($_SESSION['mensagem'])) {
				$mensagem = $_SESSION['mensagem'];
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <?php echo $mensagem;?>
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php
				unset($_SESSION['mensagem']); // Apaga a mensagem após exibição
			}
			?>
			</div>

		</div>
		<div class="row position-absolute top-50 start-50 translate-middle">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Usuarios</h5>
					</div>
					<div class="card-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<td>Id</td>
									<td>Nome</td>
									<td>E-mail</td>
								</tr>
							</thead>
							<tbody>
								<?php foreach($usuarios as $usuario){?>
									<tr>
										<td><?php echo $usuario['id'];?></td>
										<td><?php echo $usuario['nome'];?></td>
										<td><?php echo $usuario['email'];?></td>
										<td>
											<a class=" btn btn-primary" href="/aula/usuario/<?php echo $usuario['id'];?>">Editar</a>
										
										</td>
									</tr>
								<?php }?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>