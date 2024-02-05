<?php
require_once '../../controllers/UsuarioController.php';

$usuario = new UsuarioController();

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario->update($id);
}

$usuario = $usuario->ver($id);

?>
<!doctype html>
<html lang="pt-Br">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Criar Usuario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 </head>
 <body>
	<div class="container">
		<div class="row position-absolute top-50 start-50 translate-middle">
			<div class="col">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Editar Usuario</h5>
					</div>
					<div class="card-body">
						<?php 
							if($usuario == null)
							{
								echo "Nenhum usuario encontrado.";
							}
							else{
								
						?>
						<form method="POST">
							<div class="mb-3">
								<label for="nome" class="form-label">Nome</label>
								<input type="text" class="form-control" id="nome" name="nome" required value="<?php echo $usuario['nome'];?>">
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">E-mail</label>
								<input type="email" class="form-control" id="email" name="email" required value="<?php echo $usuario['email'];?>">
							</div>
							<button type="submit" class="btn btn-primary">Criar</button>
						</form>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 </body>
</html>