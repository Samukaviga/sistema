<?php 
	
	$tipo = $_SESSION['tipo'];


?>
<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							 

							<li class="menu-title">
								<span><?= $_SESSION['nome'] ?></span>
							</li>
							
							<li class="submenu">
								<a href="#"><i class="feather-grid"></i> <span>Administrador</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="./">Home</a></li> 	 
									<li><a href="./relatorio.php">Relatório</a></li> 	 
									<li><a href="./relatorio-unidade.php">Relatório por unidade</a></li> 	 
									<li><a href="./cadastro.php">Cadastrar Professor</a></li> 	 
								</ul>
							</li>
							

							
						</ul>
					</div>
                </div>
				
</div>