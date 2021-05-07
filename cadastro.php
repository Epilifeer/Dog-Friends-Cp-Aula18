<html>
    <?php
        require("acessabd.php")
        if(insereNovoCachorro($_POST['nome'], 
        $_POST['senha'], 
        $_POST['raca'], 
        $_POST['telefone'], 
        $_POST['data'],
        $_POST['descricao'],
        $_POST['foto'],
        $_POST['sexo'])){
            echo "<form action='/perfil.html' method='post'>";
            echo "<input type='submit' class='btn btn-light' value='Entrar'>";
            echo "</form>";        
        } else{
            echo "Erro no cadastro";
            echo "<form action='/index.html' method='post'>";
            echo "<input type='submit' class='btn btn-light' value='Tente Novamente'>";
            echo "</form>";}
    ?>
</html>