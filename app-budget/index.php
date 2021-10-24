<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orçamento</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<main>
		<div class="painel">
			<h2>Seja bem-vindo </h2>
			<div class="conteudo-painel">
				<p>Envie sua cotação aqui! <br>
                Depois disso, enviaremos o orçamento em seu email. <br>
                Descreva de forma clara e detalhada o seu website. <br>
                Se possivel envie referências.
            </p>	
			</div>
		</div>

		<div class="painel">
			<h2>Orçamento</h2>
			<div class="conteudo-painel">
				<form action="confirm.php" method="POST">
					<label for="email">Email</label>
					<input type="email" class="campoTexto"  name="email" required/>
                    <br>
                    <label for="cpf-cnpj">CPF ou CNPJ</label>
					<input type="number" class="campoTexto" name="cpf-cnpj" required/>
                    <br>
                    <label for="nome">Qual é o nome da empresa?</label>
					<input type="text" class="campoTexto" name="nome" required/>
                    <br>
                    <label for="cpf-cnpj">Telefone</label>
					<input type="number" class="campoTexto" name="telefone"  required/>
                    <br>
					<label for="ramo">Qual é o ramo do seu negócio?</label>
					<input type="text" class="campoTexto" name="ramo" required/><br>
                    <br>
                    <label for="cor">Defina a cor primaria do site</label><br>
					<input type="color" class="color" name="cor1" required/> <br>
                    <br>
                    <label for="cor">Defina a cor secundaria do site</label> <br>
					<input type="color" class="color" name="cor2" required/> <br>
                    <br>
                    <label for="referencia">Envie uma referência</label><br>
					<input type="file" class="img" name="referencia"/>

					<button class="botao" type="submit">Enviar</button>
				</form>
			</div>
		</div>

	</main>
</body>
</html>
</html>


