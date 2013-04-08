<?php include("includes/config.php"); ?>
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>

<?php include("includes/meta.php"); ?>
	
</head>
<body>

<?php include("includes/header.php"); ?>

<section id="main">
	<ul class="navigation">
		<li><a href="links.php" title="Meu Perfil">Meu Perfil</a></li>
		<li><a class="current" href="estatisticas.php" title="Estatísticas">Estatísticas</a></li>
	</ul>
	<div id="content">
		<div class="graficos">
			<h2>Link <a href="http://expre.me/Def0R" target="_blank" title="Acessar Link">http://expre.me/Def0R</a></h2>
			<a class="back" href="javascript:history.back();" title="Voltar">Voltar</a>
			<br />
			<br />
			
			<img src="assets/images/banners/grafico.gif" alt="" />
			
			<br />
		</div> <!-- /graficos -->
	</div> <!-- /content -->
</section>

<?php include("includes/footer.php"); ?>
	
</body>
</html>