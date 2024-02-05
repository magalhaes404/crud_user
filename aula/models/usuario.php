<?php

require_once '../../config.php';

class usuario {

    function get() {
        $membros = array();
        $db = new db();
        $conn = $db->init();
        $resultado = $conn->query("SELECT * FROM membros");
        if ($resultado != null) {
            while ($linha = $resultado->fetch_assoc()) {
                array_push($membros, $linha);
            }
        }
        return $membros;
    }

    function create($nome, $email) {
        $db = new db();
        $conn = $db->init();
        $stmt = $conn->prepare("INSERT INTO membros (nome, email) VALUES ('$nome','$email')");
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    function update($id, $nome, $email) {
        $db = new db();
        $conn = $db->init();
        $stmt = $conn->prepare("UPDATE membros SET nome = '$nome', email = '$email' WHERE id = $id");
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    function destroy($id) {
        $db = new db();
        $conn = $db->init();
        $stmt = $conn->prepare("DELETE FROM membros WHERE id = $id");
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    function getById($id) {
        $usuario = null;
        $db = new db();
        $conn = $db->init();
        $resultado = $conn->query("SELECT * FROM membros WHERE id = $id");
        if ($resultado != null) {
            $usuario = $resultado->fetch_assoc();
        }
        $conn->close();
        return $usuario;
    }

}

?>
