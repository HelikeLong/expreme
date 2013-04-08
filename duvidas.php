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
		
		<?php include('includes/sidebar-paginas.php'); ?>
		<article class="text">
			<h2>Dúvidas</h2>
			<p>Possúi alguma dúvida sobre como encurtar URL's? <br />
			Você pode enviar um e-mail para <a href="#" title="">contato@expre.me</a> ou então preencher o formulário de contato, se preferir não utilizar essas
duas formas, digite abaixo o que precisa, que responderemos o mais rápido possível.</p>
			<br />
				<div id="disqus_thread"></div>
				<script type="text/javascript">
			   var disqus_shortname = 'expreme';
			   (function() {
		            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		            dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
		            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		        })();
				</script>
    			<noscript>Porfavor, habilite a opcão de Javascript em seu navegador para ver o conteúdo desta área.</noscript>
		</article>
		
		<br />
	</div> <!-- /content -->
</section>

<?php include("includes/footer.php"); ?>
	
</body>
</html>