
<?php
    $arquivo = 
    include_once("conexao.php");
    if(isset($_POST['email']) && !empty($_POST['email'])){
	    $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
    }
    $to = $email;
    $subject = "Seu arquivo chegou!";
    $body = "Olá ".$nome.", seu download está disponível abaixo: https://drive.google.com/file/d/1TDNLI8BT7TvsVPmFYm7VKzd5AWjtjwLD/view?usp=sharing";
    $header = "From: brendapujol@cimol.com"."\r\n"
               ."Reply to: brendasp1939@gmail.com"."\e\n"
               ."X=Mailer:PHP/".phpversion();
	if (mail($to,$subject,$body,$header)){
        $result_usuario = "INSERT INTO Usuarios (nome, email) VALUES ('$nome', '$email')";  
	    $resultado_usuario = mysqli_query($conn, $result_usuario);	
        echo("Email enviado com sucesso!");
    }else{
        echo("O email não pode ser enviado");
    }
    
?>
