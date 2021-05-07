<html>
    <?php
    require("/acessabd.php");
        if(confereCadastro($_POST['nome'], $_POST['senha'])){
            echo "Login realizado com sucesso!";
            echo "<form action='/perfil.html' method='post'>";
            echo "<input type='submit' class='btn btn-light' value='Entrar'>";
            echo "</form>";
        
            session_start();
            $_SESSION['nome'] = $_POST['nome'];
            $_SESSION['senha'] = $_POST['senha'];
        } else{
            echo "Nome ou senha não existem!";
            echo "<form action='/index.html' method='post'>";
            echo "<input type='submit' class='btn btn-light' value='Tente Novamente'>";
            echo "</form>" ;
        }

    ?>
</html>