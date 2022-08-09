<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $data_nasc = $_POST["data_nasc"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $birth = $_POST["birth"];
        $avatar = $_POST["avatar"];
        $bio = $_POST["bio"];
        $type = $_POST["type"];
        $status = $_POST["status"];

        $sql = "INSERT INTO usuarios (data_nasc, nome, email, senha, birth, avatar, bio, type, status) VALUES (
            '{$data_nasc}', '{$nome}', '{$email}', '{$senha}', '{$birth}', '{$avatar}', '{$bio}', '{$type}', '{$status}')";

        $res = $conn->query($sql);

        if ($res==true) {
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>
            location.href='?page=listar';</script>";
            
        }else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>
            location.href='?page=listar';</script>";
        }
        break;
    
    case 'editar':
        $data_nasc = $_POST["data_nasc"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $birth = $_POST["birth"];
        $avatar = $_POST["avatar"];
        $bio = $_POST["bio"];
        $type = $_POST["type"];
        $status = $_POST["status"];

        $sql = "UPDATE usuarios SET 
                    data_nasc='{$data_nasc}',
                    nome='{$nome}',
                    email='{$email}',
                    senha='{$senha}',
                    birth='{$birth}',
                    avatar='{$avatar}',
                    bio='{$bio}',
                    type='{$type}',
                    status='{$status}'
                WHERE
                    id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res==true) {
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>
            location.href='?page=listar';</script>";
            
        }else {
            print "<script>alert('Não foi possível editar');</script>";
            print "<script>
            location.href='?page=listar';</script>";
        }
        break;

    case 'excluir':

         $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
         
         $res = $conn->query($sql);

        if ($res==true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>
            location.href='?page=listar';</script>";
            
        }else {
            print "<script>alert('Não foi possível excluir');</script>";
            print "<script>
            location.href='?page=listar';</script>";
        }

         break;
}