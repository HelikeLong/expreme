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
		<li><a class="current" href="links.php" title="Meu Perfil">Meu Perfil</a></li>
		<li><a href="estatisticas.php" title="Estatísticas">Estatísticas</a></li>
	</ul>
	<div id="content">
		<section id="user">
			<figure>
				<img src="assets/images/profile/profile.jpg" alt="" />
				<a href="#" title="Trocar Imagem" class="orange">Trocar</a>
			</figure>
			<ul id="info">
				<li class="name">
					<label class="edit">Wallace Erick</label>
					<input class="editable" type="text" value="Wallace Erick" tabindex="1" />
				</li>
				<li>
					<label class="edit">wallace_erick@hotmail.com</label>
					<input class="editable" type="text" value="wallace_erick@hotmail.com" tabindex="2" />
				</li>
				<li>
					<label class="edit">Caieiras/SP</label>
					<input class="editable" type="text" value="Caieiras/SP" tabindex="3" />
				</li>
				<li class="desc">
					<label class="edit">Lorem Ipsum has been the industry's standard dummy text has been the industry's standard dummy text...</label>
					<input class="editable" type="text" value="Lorem Ipsum has been the industry's standard dummy text has been the industry's standard dummy text..." tabindex="4" />
				</li>
				<li>
					<button type="button" class="orange" tabindex="5">Editar</button>
					<!-- Clicando no editar, habilita todos os inputs e muda o button para Salvar e insere o de Excluir.
					<button type="button" class="orange" tabindex="5">Salvar</button>
					<button type="button" class="orange" tabindex="6">Editar</button>
					-->
				</li>
			</ul>
			<div id="stats">
				<ul>
					<li><span class="number">128</span> <span class="text">Links</span></li>
					<li><span class="number">6</span> <span class="text">Pastas</span></li> 
					<li><span class="since">Desde</span> <span class="mounth">DEZ/12</span></li> 
				</ul>
			</div> <!-- /stats -->
			<br />
		</section> <!-- /user -->
		
		<aside id="sidebar">
			<h2><span>+</span> Links</h2>
			<input class="singleLink white" type="text" name="" tabindex="1" />
			<textarea class="multiLink white" name="multi" id="multi" cols="30" rows="10"></textarea>
			<ul class="types">
				<li>
					<input type="checkbox" name="" id="" tabindex="4" checked="checked" />
					<label for="">Redirecionar</label>
				</li>
				<li>
					<input type="checkbox" name="" id="" tabindex="5" />
					<label for="">Ocultar Origem</label>
				</li>
				<li>
					<input type="checkbox" name="frame" id="frame" tabindex="6" />
					<label for="frame">Frame</label>
				</li>
				<li>
					<input type="checkbox" name="" id="" tabindex="6" />
					<label for="">Anti-spam</label>
				</li>
			</ul>
			<button type="button" class="orange">Expremer</button>
			<ul class="options">
				<li class="showMulti"><a class="arrow" href="javascript:void(0);" title="Múltiplos Links">Múltiplos Links</a></li>
				<li class="showSingle"><a class="arrow" href="javascript:void(0);" title="Link Único">Link Único</a></li>
				<li><a class="arrow" href="javascript:void(0);" title="Criar Pasta">Criar Pasta</a></li>
			</ul>
			<br />
			
			<h2><span>+</span> Ajude o Expre.me</h2>
			<p>O <strong>Expre.me</strong> possui alguns gastos mensais que vão de servidor à fornecedores, nossa única renda vem através de anúnios espalhados pelos links e de usuários que compram a <a href="licenca.php" title="Comprar uma Licença">licença premium</a>, se você gosta dessa ferramenta que oferecemos gratuitamente pra você, compatilhe e <a href="doacao.php" title="Faça uma Doação">faça uma doação</a> agradecendo e nos incentivando a continuar mantendo a ferramenta sempre atualizada, proporcionando a satisfação de todos.</p>
		</aside> <!-- /sidebar -->
		
		<section id="list">
			<form id="filter" action="">
				<span class="lupa"></span>
				<input type="text" name="name_filter" id="name_filter" class="white" />
				<nav>
					<ul>
						<li><a href="links.php" title="Links">Links</a></li>
						<li><a class="current" href="pastas.php" title="Pastas">Pastas</a></li>
					</ul>
					<div class="select">
						Ordernar por:
						<select name="" id="" class="white">
							<option value="">Nome</option>
							<option value="">Data</option>
							<option value="">Cliques</option>
							<option value="">Pasta</option>
						</select>
					</div>
				</nav>
				<div id="links" class="folders">
					<!--
					<div class="information">
						<p>Você ainda não criou nenhuma pasta, <a href="#" title="">crie uma pasta</a> para organizar seus links.</p>
					</div>
					-->
					<article>
						<a class="close" href="#" title="Excluir">X</a>
						<figure>
							<img src="assets/images/profile/indisponivel.jpg" alt="" />
							<a href="#" title="Inserir Imagem" class="orange">Inserir</a>
						</figure>
						<div class="details">
							<ul>
								<li class="name">
									<label class="edit">Arrow</label>
									<input class="editable" type="text" value="Arrow" />
								</li>
								<li class="date">
									<span>26/02/2013</span>
								</li>
								<li class="stats double">
									<span>18</span> Links
									<br />
									<span>73</span> Cliques
								</li>
							</ul>
							<a class="enter" href="links.php" title="Veja todos os links desta pasta">Ver Links</a>
						</div> <!-- /details -->
					</article>
					
					<article>
						<a class="close" href="#" title="Excluir">X</a>
						<figure>
							<img src="assets/images/profile/indisponivel.jpg" alt="" />
							<a href="#" title="Inserir Imagem" class="orange">Inserir</a>
						</figure>
						<div class="details">
							<ul>
								<li class="name">
									<label class="edit">Arrow</label>
									<input class="editable" type="text" value="Arrow" />
								</li>
								<li class="date">
									<span>26/02/2013</span>
								</li>
								<li class="stats double">
									<span>18</span> Links
									<br />
									<span>73</span> Cliques
								</li>
							</ul>
							<a class="enter" href="links.php" title="Veja todos os links desta pasta">Ver Links</a>
						</div> <!-- /details -->
					</article>
					
					<article>
						<a class="close" href="#" title="Excluir">X</a>
						<figure>
							<img src="assets/images/profile/indisponivel.jpg" alt="" />
							<a href="#" title="Inserir Imagem" class="orange">Inserir</a>
						</figure>
						<div class="details">
							<ul>
								<li class="name">
									<label class="edit">Arrow</label>
									<input class="editable" type="text" value="Arrow" />
								</li>
								<li class="date">
									<span>26/02/2013</span>
								</li>
								<li class="stats double">
									<span>18</span> Links
									<br />
									<span>73</span> Cliques
								</li>
							</ul>
							<a class="enter" href="links.php" title="Veja todos os links desta pasta">Ver Links</a>
						</div> <!-- /details -->
					</article>
					
					<article>
						<a class="close" href="#" title="Excluir">X</a>
						<figure>
							<img src="assets/images/profile/indisponivel.jpg" alt="" />
							<a href="#" title="Inserir Imagem" class="orange">Inserir</a>
						</figure>
						<div class="details">
							<ul>
								<li class="name">
									<label class="edit">Arrow</label>
									<input class="editable" type="text" value="Arrow" />
								</li>
								<li class="date">
									<span>26/02/2013</span>
								</li>
								<li class="stats double">
									<span>18</span> Links
									<br />
									<span>73</span> Cliques
								</li>
							</ul>
							<a class="enter" href="links.php" title="Veja todos os links desta pasta">Ver Links</a>
						</div> <!-- /details -->
					</article>
					
					<article>
						<a class="close" href="#" title="Excluir">X</a>
						<figure>
							<img src="assets/images/profile/indisponivel.jpg" alt="" />
							<a href="#" title="Inserir Imagem" class="orange">Inserir</a>
						</figure>
						<div class="details">
							<ul>
								<li class="name">
									<label class="edit">Arrow</label>
									<input class="editable" type="text" value="Arrow" />
								</li>
								<li class="date">
									<span>26/02/2013</span>
								</li>
								<li class="stats double">
									<span>18</span> Links
									<br />
									<span>73</span> Cliques
								</li>
							</ul>
							<a class="enter" href="links.php" title="Veja todos os links desta pasta">Ver Links</a>
						</div> <!-- /details -->
					</article>
					
					<article>
						<a class="close" href="#" title="Excluir">X</a>
						<figure>
							<img src="assets/images/profile/indisponivel.jpg" alt="" />
							<a href="#" title="Inserir Imagem" class="orange">Inserir</a>
						</figure>
						<div class="details">
							<ul>
								<li class="name">
									<label class="edit">Arrow</label>
									<input class="editable" type="text" value="Arrow" />
								</li>
								<li class="date">
									<span>26/02/2013</span>
								</li>
								<li class="stats double">
									<span>18</span> Links
									<br />
									<span>73</span> Cliques
								</li>
							</ul>
							<a class="enter" href="links.php" title="Veja todos os links desta pasta">Ver Links</a>
						</div> <!-- /details -->
					</article>
					
					<br />
					
					<div class="information">
						<p>Desculpe, você atingiu o número máximo de pastas permitidas. Para criar mais pastas <a href="licenca.php" title="Comprar licença!">compre uma licença premium</a>.</p>
					</div>
					
				</div> <!-- /links -->
				<br />
			</form>
		</section> <!-- /list -->
		
		<br />
	</div> <!-- /content -->
</section>

<?php include("includes/footer.php"); ?>
	
</body>
</html>