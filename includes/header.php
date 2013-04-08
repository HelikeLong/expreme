<?php if ($url == 'index.php'){ ?>
<header id="header">
	<div class="wrapper">
		<ul class="aditional">
			<li><a href="#" class="user" title="Não possúi conta?">Não possúi conta?</a>
				<ul class="register white-overlay">
					<li><a class="expreme" href="cadastro.php" title="Crie uma, é bem rápido"><strong>Crie uma</strong>, é bem rápido</a></li>
					<li><a class="facebook" href="https://www.facebook.com/dialog/oauth?client_id=442497602501748&redirect_uri=<?php echo urlencode('http://expre.me/') ?>&scope=email title="Entre com o Facebook">Entre com o <strong>Facebook</strong></a></li>
					<li><a class="twitter" href="#" title="Entre com o Twitter">Entre com o <strong>Twitter</strong></a></li>
				</ul>
			</li>
			<li>|</li>
			<li><a href="#" class="pass" title="Esqueceu a senha?">Esqueceu a senha?</a>
				<div class="remember white-overlay">
					<p>Digite seu e-mail:</p>
					<input type="text" class="white" name="" id="" />
					<button type="button" class="orange">OK</button>
				</div>
			</li>
		</ul>
		<nav>
			<h1><a href="index.php" title="">Expre.me - Encurtador de URL's</a></h1>
			<ul>
				<li><a class="current" href="index.php" title="">Home</a></li>
				<li><a href="como-funciona.php" title="">Como Funciona?</a></li>
				<li><a href="perguntas-frequentes.php" title="">Ajuda</a></li>
				<li><a href="contato.php" title="">Contato</a></li>
			</ul>
				
			<form action="/" method="post">
				<input type="text" name="login" tabindex="1" value="Login:"/>
				<input type="password" name="senha" tabindex="2" value="*****" />
					
				<button type="button">OK</button>
			</form>
		</nav>
		<h2>Encurtador de URL's</h2>
	</div>
</header>

<?php } else { ?>

<header id="header">
	<div class="wrapper">
		<ul class="aditional">
			<li><a href="#" title="">Sair</a></li>
		</ul>
		<nav>
			<h1><a href="index.php" title="">Expre.me - Encurtador de URL's</a></h1>
			<ul class="logged">
				<li><a href="index.php" title="">Home</a></li>
				<li><a href="links.php" title="">Perfil</a></li>
				<li><a class="current" href="#" title="">Estatísticas</a></li>
				<li><a href="documentacao.php" title="">Docs</a></li>
				<li><a href="api.php" title="">API</a></li>
				<li><a href="contato.php" title="">Contato</a></li>
			</ul>
			<div id="logged">
				<p>Olá, <a href="links.php" title="Meu Perfil">Wallace Erick</a>.</p>
			</div>
		</nav>
	</div>
</header>

<?php } ?>