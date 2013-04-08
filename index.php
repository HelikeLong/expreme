<?php include("includes/mysql.php"); ?>
<?php include("includes/config.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/redirect.php"); ?>
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/lmcbutton.js"></script>

<?php include("includes/meta.php"); ?>

<script>
	$(document).ready(function() {
		$("#btExpremer").bind("click", function() {
			var link = $("#url").val();

			$.post("expremer.php",{
				link: link
			},function(resposta){
				if(resposta && resposta!="error") {
					$("#expremed").html(resposta);

					var obj = "";
					obj += '<object width="40" height="20">';
					obj += '<param name="movie" value="lmcbutton.swf">';
					obj += '<PARAM NAME=FlashVars VALUE="txt='+resposta+'">';
					obj += '<embed src="lmcbutton.swf" flashvars="txt='+resposta+'"  width="80" height="40"></embed>';
					obj += '</object>';
					$("#btCopy").html(obj);

					$(".two").show(200);
				} else {
					document.getElementById("url").focus();
				}
			})
		});


	});

		

</script>	
</head>
<body>

<?php include("includes/header.php"); ?>

<section id="shortener">
	<div id="tabs">
		<ul class="navigation">
			<li><a class="single current" href="#" title="">URL Simples</a></li>
			<li><a class="multiple" href="#" title="">Múltiplas URL's</a></li>
		</ul>
		<a class="add" href="#" title="">+</a>
		<div id="content">
			<div id="single">
				<div class="one">
					<h3><span>1.</span> Copie e cole um link neste campo:</h3>
					<form action="/" method="post">
						<input type="text"  class="white" name="url" id="url" tabindex="3" />
						<button type="button" class="orange" id="btExpremer">Expremer</button>
						<ul class="types">
							<li>
								<input type="checkbox" name="type" value="redirect" id="" tabindex="4" checked="checked" />
								<label for="">Apenas Redirecionar</label>
							</li>
							<li>
								<input type="checkbox" name="type" value="hidden" id="" tabindex="5" />
								<label for="">Ocultar Link de Origem</label>
							</li>
							<li>
								<input type="checkbox" name="type" value="frame" id="frame" tabindex="6" />
								<label for="frame">Dentro de um Frame</label>
							</li>
							<li>
								<input type="checkbox" name="type" value="protect" id="" tabindex="6" />
								<label for="">Proteger com Anti-spam</label>
							</li>
						</ul>
					</form>
				</div> <!-- /one -->
				
				<div class="two" style="display:none;">
					<h3><span>2.</span> Clique no link para copiá-lo:</h3>
					<p class="generated black"><span id="expremed">http://expre.me/H3Fd8</span> <span class="copied" style="display:none;"><span></span>Copiado</span></p>
					<span id="btCopy"></span>
				</div> <!-- /two -->
				
				<div class="three" style="display:none;">
					<h3><span>3.</span> Compartilhe seu link:</h3>
					<ul class="share">
						<li><a class="facebook black" href="#" title="">Facebook<span></span></a></li>
						<li><a class="twitter black" href="#" title="">Twitter<span></span></a></li>
						<li><a class="google black" href="#" title="">Google+<span></span></a></li>
					</ul>
				</div> <!-- /three -->
				<br />
			</div> <!-- /single -->
			
			<div id="multiple">
				<div class="information">
					<p>Desculpe, você precisa estar logado para expre.mer mais de um link por vez.</p>
					<p><a href="#" title="Criar Conta">Crie uma conta</a> e expre.ma seus links com muito mais velocidade, organize-os em pastas, tenha acesso à estatísticas de cliques e muito mais.</p>
					<p>É bem rapido, você também pode se logar com o <a class="facebook" href="#" title="Facebook">Facebook</a> ou <a class="twitter" href="#" title="Twitter">Twitter</a>.</p>
				</div> <!-- /information -->
				
				<div class="one" style="display:none;">
					<h3><span>1.</span> Copie e cole os links nesse campo, um embaixo do outro:</h3>
					<form action="/" method="post">
						<textarea class="white" name="multi" id="multi" cols="30" rows="10"></textarea>
						<button type="button" class="orange">Expremer</button>	
						<ul class="types">
							<li>
								<input type="checkbox" name="" id="" tabindex="4" checked="checked" />
								<label for="">Apenas Redirecionar</label>
							</li>
							<li>
								<input type="checkbox" name="" id="" tabindex="5" />
								<label for="">Ocultar Link de Origem</label>
							</li>
							<li>
								<input type="checkbox" name="frame" id="frame" tabindex="6" />
								<label for="frame">Dentro de um Frame</label>
							</li>
							<li>
								<input type="checkbox" name="" id="" tabindex="6" />
								<label for="">Proteger com Anti-spam</label>
							</li>
						</ul>
					</form>
				</div> <!-- /one -->
				
				<div class="two" style="display:none">
					<h3><span>2.</span> Clique em um link para copiar:</h3>
					<ul class="multi-links">
						<li class="generated black">http://expre.me/H3Fd8<span class="copied">Copiado</span></li>
						<li class="generated gray">http://expre.me/H3Fd8</li>
						<li class="generated gray">http://expre.me/H3Fd8</li>
						<li class="generated gray">http://expre.me/H3Fd8</li>
						<li class="generated gray">http://expre.me/H3Fd8</li>
						<li class="generated gray">http://expre.me/H3Fd8</li>
						<li class="generated gray">http://expre.me/H3Fd8</li>
						<li class="generated gray">http://expre.me/H3Fd8</li>
						<li class="generated gray">http://expre.me/H3Fd8</li>
					</ul>
					<a class="arrow" href="#" title="Copiar Todos">Copiar Todos</a>
				</div> <!-- /two -->
				
				<div class="three" style="display:none">
					<h3><span>3.</span> Compartilhe seu link:</h3>
					<ul class="share">
						<li><a class="facebook black" href="#" title="">Facebook<span></span></a></li>
						<li><a class="twitter black" href="#" title="">Twitter<span></span></a></li>
						<li><a class="google black" href="#" title="">Google+<span></span></a></li>
					</ul>
				</div> <!-- /three -->
				
			</div> <!-- /multiple -->
			
		</div> <!-- /content -->
	</div> <!-- /tabs -->
</section>

<?php include("includes/footer.php"); ?>
	
</body>
</html>