<?php include("includes/config.php"); ?>
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>

<?php include("includes/meta.php"); ?>
	
</head>
<body>

<?php include("includes/header.php"); ?> 

<section id="main" class="normalize">
	<div id="content">
		<div class="contact">
			<h2>Contato</h2>
			<p>Entre em contato com os responsáveis pelo <strong>Expre.me</strong>, enviando um e-mail diretamente para <a href="mailto:contato@expre.me?Subject=Contato pelo Site | Expreme" title="">contato@expre.me</a> ou preencha
	o formulário abaixo. Dê um feedback sobre o que você está achando da ferramenta, sugira melhorias, faça com que nosso Encurtador de URL's cresça cada vez mais.</p>

			<form action="" method="post">
				<label for="nome">Nome<span>*</span></label>
				<input type="text" name="nome" class="white" tabindex="1" /><br />
				
				<label for="email">E-mail<span>*</span></label>
				<input type="text" name="email" class="white" tabindex="2" /><br />
				
				<label for="assunto">Assunto<span>*</span></label>
				<input type="text" name="assunto" class="white" tabindex="3" /><br />
				
				<label for="mensagem">Mensagem<span>*</span></label>
				<textarea name="mensagem" id="" class="white" cols="30" rows="10" tabindex="4"></textarea><br />
				
				<button type="button" class="orange">Enviar</button>
			</form>
		</div> <!-- /contact -->
	</div> <!-- /content -->
</section>

<?php include("includes/footer.php"); ?>
	
</body>
</html>