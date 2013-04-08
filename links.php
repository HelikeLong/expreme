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
						<li><a class="current" href="links.php" title="Links">Links</a></li>
						<li><a href="pastas.php" title="Pastas">Pastas</a></li>
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
				<div id="links" class="links">
					<!--
					<div class="information">
						<p>Você ainda não expre.meu nenhum link, utilize o campo ao lado para expre.mer!</p>
					</div>
					-->
					<article class="hover">
						<a style="display:block;" class="close" href="javascript:deleteLink();" title="Excluir">X</a>
						<div class="overlay excluir">
							<p>Tem certeza que deseja excluir esse link?</p>
							<button type="button" class="orange">Não</button>
							<button type="button" class="orange">Sim</button>
						</div>
						<figure>
							<input type="checkbox" name="" id="" class="delete" checked="checked" />
							<img src="assets/images/profile/indisponivel.jpg" alt="" />
							<a href="#" title="Inserir Imagem" class="orange">Inserir</a>
						</figure>
						<div class="details">
							<ul>
								<li class="name">
									<label class="edit">Episódio 1</label>
									<input class="editable" type="text" value="Arrow - Episódio 2" />
								</li>
								<li class="date">
									<span>26/02/2013</span>
										/
									<div class="pasta">
										<a class="open" href="#" title="Meus Seriados">Meus Seriados</a>
										<ul class="overlay">
											<li><a href="#" title="">Nome da Pasta</a></li>
											<li><a href="#" title="">Nome da Pasta bem Grande pra Estourar Mesmo</a></li>
											<li><a href="#" title="">Nome da Pasta</a></li>
										</ul>	
									</div>
								</li>
								<li class="origin"><a href="http://www.seulinkgrande/muitoruim/que/ninguem/consegue/entender/nada/nessa/bagaca/" target="_blank" title="Acessar link de Origem">http://www.seulinkgrande/muitoruim/que/ninguem/consegue/entender/nada/nessa/bagaca/</a></li>
								<li class="icons">
									<ul class="share">
										<li><a class="facebook black" href="#" title="">Facebook<span></span></a></li>
										<li><a class="twitter black" href="#" title="">Twitter<span></span></a></li>
										<li><a class="google black" href="#" title="">Google+<span></span></a></li>
									</ul> <!-- /share -->
								</li>
								<li class="stats">
									<span>48</span> Cliques  |  <a href="#" title="Ver Estatísticas">Ver Estatísticas</a>
								</li>
							</ul>
							<a href="#" title="" class="generated black">http://expre.me/HeFd8</a>
						</div> <!-- /details -->
					</article>
					
					<article>
						<a class="close" href="javascript:void(0);" title="Excluir">X</a>
						<figure>
							<input type="checkbox" name="" id="" class="delete" />
							<img src="assets/images/profile/link.jpg" alt="" />
							<a href="#" title="Trocar Imagem" class="orange">Trocar</a>
						</figure>
						<div class="details">
							<ul>
								<li class="name">
									<label class="edit">Arrow - Episódio 2</label>
									<input class="editable" type="text" value="Arrow - Episódio 2" />
								</li>
								<li class="date">
									<span>26/02/2013</span>
										/
									<div class="pasta">
										<a class="none open" href="#" title="Sem Pasta">Sem Pasta</a>
										<ul class="overlay">
											<li><p>Você ainda não possúi nenhuma pasta criada.</p></li>
											<button class="orange">Criar</button>
										</ul>
									</div>
								</li>
								<li class="origin"><a href="http://www.seulinkgrande/muitoruim/que/ninguem/consegue/entender/nada/nessa/bagaca/" target="_blank" title="Acessar link de Origem">http://www.seulinkgrande/muitoruim/que/ninguem/consegue/entender/nada/nessa/bagaca/</a></li>
								<li class="icons">
									<ul class="share">
										<li><a class="facebook black" href="#" title="">Facebook<span></span></a></li>
										<li><a class="twitter black" href="#" title="">Twitter<span></span></a></li>
										<li><a class="google black" href="#" title="">Google+<span></span></a></li>
									</ul> <!-- /share -->
								</li>
								<li class="stats">
									<span>48</span> Cliques  |  <a href="#" title="Ver Estatísticas">Ver Estatísticas</a>
								</li>
							</ul>
							<a href="#" title="" class="generated black">http://expre.me/HeFd8</a>
						</div> <!-- /details -->
					</article>
					
					<article>
						<a class="close" href="#" title="Excluir">X</a>
						<figure>
							<input type="checkbox" name="" id="" class="delete" />
							<img src="assets/images/profile/link.jpg" alt="" />
							<a href="#" title="Trocar Imagem" class="orange">Trocar</a>
						</figure>
						<div class="details">
							<ul>
								<li class="name">
									<label class="edit">Arrow - Episódio 2</label>
									<input class="editable" type="text" value="Arrow - Episódio 2" />
								</li>
								<li class="date">
									<span>26/02/2013</span>
										/
									<div class="pasta">
										<a class="open" href="#" title="Meus Seriados">Meus Seriados</a>
									</div>
								</li>
								<li class="origin"><a href="http://www.seulinkgrande/muitoruim/que/ninguem/consegue/entender/nada/nessa/bagaca/" target="_blank" title="Acessar link de Origem">http://www.seulinkgrande/muitoruim/que/ninguem/consegue/entender/nada/nessa/bagaca/</a></li>
								<li class="icons">
									<ul class="share">
										<li><a class="facebook black" href="#" title="">Facebook<span></span></a></li>
										<li><a class="twitter black" href="#" title="">Twitter<span></span></a></li>
										<li><a class="google black" href="#" title="">Google+<span></span></a></li>
									</ul> <!-- /share -->
								</li>
								<li class="stats">
									<span>48</span> Cliques  |  <a href="#" title="Ver Estatísticas">Ver Estatísticas</a>
								</li>
							</ul>
							<a href="#" title="" class="generated black">http://expre.me/HeFd8</a>
						</div> <!-- /details -->
					</article>
					
					<article>
						<a class="close" href="#" title="Excluir">X</a>
						<figure>
							<input type="checkbox" name="" id="" class="delete" />
							<img src="assets/images/profile/link.jpg" alt="" />
							<a href="#" title="Trocar Imagem" class="orange">Trocar</a>
						</figure>
						<div class="details">
							<ul>
								<li class="name">
									<label class="edit">Arrow - Episódio 2</label>
									<input class="editable" type="text" value="Arrow - Episódio 2" />
								</li>
								<li class="date">
									<span>26/02/2013</span>
										/
									<div class="pasta">
										<a class="open" href="#" title="Meus Seriados">Meus Seriados</a>
									</div>
								</li>
								<li class="origin"><a href="http://www.seulinkgrande/muitoruim/que/ninguem/consegue/entender/nada/nessa/bagaca/" target="_blank" title="Acessar link de Origem">http://www.seulinkgrande/muitoruim/que/ninguem/consegue/entender/nada/nessa/bagaca/</a></li>
								<li class="icons">
									<ul class="share">
										<li><a class="facebook black" href="#" title="">Facebook<span></span></a></li>
										<li><a class="twitter black" href="#" title="">Twitter<span></span></a></li>
										<li><a class="google black" href="#" title="">Google+<span></span></a></li>
									</ul> <!-- /share -->
								</li>
								<li class="stats">
									<span>48</span> Cliques  |  <a href="#" title="Ver Estatísticas">Ver Estatísticas</a>
								</li>
							</ul>
							<a href="#" title="" class="generated black">http://expre.me/HeFd8</a>
						</div> <!-- /details -->
					</article>
					
					<article>
						<a class="close" href="#" title="Excluir">X</a>
						<figure>
							<input type="checkbox" name="" id="" class="delete" />
							<img src="assets/images/profile/link.jpg" alt="" />
							<a href="#" title="Trocar Imagem" class="orange">Trocar</a>
						</figure>
						<div class="details">
							<ul>
								<li class="name">
									<label class="edit">Arrow - Episódio 2</label>
									<input class="editable" type="text" value="Arrow - Episódio 2" />
								</li>
								<li class="date">
									<span>26/02/2013</span>
										/
									<div class="pasta">
										<a class="open" href="#" title="Meus Seriados">Meus Seriados</a>
									</div>
								</li>
								<li class="origin"><a href="http://www.seulinkgrande/muitoruim/que/ninguem/consegue/entender/nada/nessa/bagaca/" target="_blank" title="Acessar link de Origem">http://www.seulinkgrande/muitoruim/que/ninguem/consegue/entender/nada/nessa/bagaca/</a></li>
								<li class="icons">
									<ul class="share">
										<li><a class="facebook black" href="#" title="">Facebook<span></span></a></li>
										<li><a class="twitter black" href="#" title="">Twitter<span></span></a></li>
										<li><a class="google black" href="#" title="">Google+<span></span></a></li>
									</ul> <!-- /share -->
								</li>
								<li class="stats">
									<span>48</span> Cliques  |  <a href="#" title="Ver Estatísticas">Ver Estatísticas</a>
								</li>
							</ul>
							<a href="#" title="" class="generated black">http://expre.me/HeFd8</a>
						</div> <!-- /details -->
					</article>
					
					
				</div> <!-- /links -->
				<a class="arrow exclude-all" href="#" title="Excluir Todos Selecionados">Excluir Todos Selecionados</a>

				<br />
				
				<div class="pagination">
					<a href="" class="previous_link  no_more">&lt;</a>
					<a href="" class="page_link">1</a>
					<a href="" class="page_link active_page">2</a>
					<a href="" class="page_link ">3</a>
					<a href="" class="next_link">&gt;</a>
				</div>
				
			</form>
		</section> <!-- /list -->
		
		<br />
	</div> <!-- /content -->
</section>

<?php include("includes/footer.php"); ?>
	
</body>
</html>