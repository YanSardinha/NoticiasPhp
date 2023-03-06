<?php
    switch( $_REQUEST["acao"]){
        case 'cadastrar':
            $user = $_POST['user'];
            $email = $_POST['email'];
            $pass = md5($_POST['pass']);

            $sql = "INSERT INTO users(user, email, pass) VALUES (
                '{$user}', '{$email}', '{$pass}')";
            $res = $conn -> query($sql);

            if ($res == true){
                print '<script>alert("Cadastro com sucesso.");
                </script>;';
                print '<script>location.href="?page=listar";
                </script>;';
            }
            else{
                print '<script>alert("Cadastro não efetuado.");
                </script>;';
                print '<script>location.href="?page=listar";
                </script>;';
            }
            break;
        
        case 'editar':
            $user = $_POST['user'];
            $email = $_POST['email'];
            
            $sql = "UPDATE users SET 
                user ='{$user}', 
                EMAIL = '{$email}'
                WHERE id =".$_REQUEST['id'];
            $res = $conn -> query($sql);

            if ($res == true){
                print '<script>alert("Editado com sucesso.");
                </script>;';
                print '<script>location.href="?page=listar";
                </script>;';
            }
            else{
                print '<script>alert("Editado não efetuado.");
                </script>;';
                print '<script>location.href="?page=listar";
                </script>;';
            }
            break;
        
        case 'excluir':
            $sql = "DELETE FROM users where id=".$_REQUEST["id"];
            
            $res = $conn -> query($sql);
            
            if ($res == true){
                print '<script>alert("Excluido com sucesso.");
                </script>;';
                print '<script>location.href="?page=listar";
                </script>;';
            }
            else{
                print '<script>alert("Excluido não efetuado.");
                </script>;';
                print '<script>location.href="?page=listar";
                </script>;';
            }
            break;
    }
?>