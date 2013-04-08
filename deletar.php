<?php include("includes/mysql.php"); ?>
<?php include("includes/config.php"); ?>
<?php include("includes/functions.php"); ?>
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>

<?php include("includes/meta.php"); ?>
<script>
function click(el) {
  var evt = document.createEvent('Event');
  evt.initEvent('click', true, true);
  el.dispatchEvent(evt);
}

document.querySelector('#selectPhoto').addEventListener('click', function(e) {
  var fileInput = document.querySelector('#photo');
  fileInput.click(); 
}, false);

function handleFiles(files) {
  alert('Well done!');
}
</script>	
</head>
<body>

<?php include("includes/header.php"); ?> 

<section id="main" class="normalize">
	<div id="content">
		<div class="contact">
			<h2>Cadastro</h2>
			<p>Obrigado pelo interesse em se registrar no <strong>Expre.me</strong>, esperamos que essa ferramenta te ajude.  Não deixe de dar seu feedback sobre o que você está achando dela, sugira melhorias, faça com que nosso Encurtador de URL's cresça cada vez mais.</p>

			<form action="" method="post">
				<div class="uploader">
					<a href="javascript:void(0)" title="Selecionar" id="selectPhoto" class="orange" onclick="document.getElementById('photo').focus();">Selecionar</a>
					<input type="file" name="photo" id="photo" value="" style="visibility: hidden;" />
				</div>
				<input type="text" name="nome" class="white default-value" tabindex="1" placeholder="Nome Completo" />
				<input type="text" name="email" class="white default-value" tabindex="2" placeholder="E-mail" />
				<input type="text" name="assunto" class="white default-value" tabindex="3" placeholder="Cidade/Estado" />
				<textarea name="mensagem" id="" class="white new default-value" cols="30" rows="10" tabindex="4" placeholder="Sobre você..."></textarea><br />
				<p>Se cadastrando no Expre.me, você concorda com nossas <strong>Políticas de Privacidade</strong>.</p>
				<button type="button" class="orange new">Cadastrar</button>
			</form>
		</div> <!-- /contact -->
	</div> <!-- /content -->
</section>

<?php include("includes/footer.php"); ?>
	
</body>
</html>