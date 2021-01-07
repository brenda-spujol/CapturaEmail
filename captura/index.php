<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Super Namorado</title>
    </head>
    <body background="images\mario.png">
		<div class="fundo">
		<h1>Para baixar o jogo Super Namorado</h1>
		<h3>Digite suas informações que enviaremos um email com o link</h3>
		</div>
		<form method="POST" action=".\processa.php">
			<input class="field" type="text" name="nome" placeholder="Nome completo"><br><br>
			<input class="field" type="email" name="email" placeholder="Seu melhor e-mail"><br><br>
			
			<input class="fiel" type="submit" value="Enviar"><br><br>
		</form>
		
		
		<style>
		.fundo{background-color: white; width: 600px; height: 100px; margin-bottom: 30px; border-radius:10px;  text-align: center; }
		body {font-family: Arial, Helvetica, sans-serif; background-color:yellow; margin-left:400px;}
		.form {display: flex;flex-direction: column;}
		.field{padding:10px;margin-bottom:15px;margin-left: 150px;border:1px solid #DDD; border-radius:5px;font-family: Arial, Helvetica, sans-serif;font-size: 16px;}
		.fiel{padding:10px;margin-bottom:15px;margin-left: 220px;border:1px solid #DDD; border-radius:5px;font-family: Arial, Helvetica, sans-serif;font-size: 16px;}
		</style>

	</body>
</html>