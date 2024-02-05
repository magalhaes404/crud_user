<?php

require_once '../../models/usuario.php';

class UsuarioController {

    function index() {
		session_start();
        $usuario = new usuario();
        $usuarios = $usuario->get();
		return $usuarios;
    }

    function create() {
        session_start();
        // Coleta os dados do usuário via POST
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        // Cria um novo usuário
        $usuario = new usuario();
        $usuario->create($nome, $email);
		
		$_SESSION['mensagem'] = 'Salvo com sucesso';

        // Redireciona para página de listagem de usuários
        header('Location: /aula/usuario');
    }

    function update($id) {
        session_start();
        // Coleta os dados do usuário via POST
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        // Atualiza o usuário
        $usuario = new usuario();
        $usuario->update($id, $nome, $email);

		$_SESSION['mensagem'] = 'Salvo com sucesso';
        // Redireciona para página de listagem de usuários
        header('Location: /aula/usuario');
    }

    function destroy($id) {
        session_start();
        // Remove o usuário
        $usuario = new usuario();
        $usuario->destroy($id);

		$_SESSION['mensagem'] = 'Deletado com sucesso';
        // Redireciona para página de listagem de usuários
        header('Location: /aula/usuario');
    }

    function ver($id) {
        // Obtém o usuário pelo ID
        $usuario = new usuario();
        $usuario = $usuario->getById($id);

        // Retorna os dados do usuário para a visualização
        return $usuario;
    }

}

?>
