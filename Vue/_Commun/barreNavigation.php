<div>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
    		<div class="navbar-header">
    			<a class="navbar-brand" href="">
    				<span>
    					<img src="Contenu/Images/logoLPP.gif" width="17" height="17"/>
    				</span>
    				LPP - Laboratoire de Phonétique et Phonologie
    			</a>
    		</div>
    		<div>
      			<ul class="nav navbar-nav">
       				<li><a href="accueil/">Accueil</a></li>
       				<li><a href="corpus/">Corpus</a></li>
       			</ul>
    		</div>
	    	<div>
		        <ul class="nav navbar-nav navbar-right">
		        	<?php if (isset($admin)): ?>
		        		<li class="dropdown">
		        			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		        				<?= $this->nettoyer($admin['login']) ?> <b class="caret"></b>
		        			</a>
		                    <ul class="dropdown-menu">
		                    	<li><a href="admin/">Admin</a></li>
		                        <li><a href="connexion/deconnecter">Se déconnecter</a></li>
		                    </ul>
	                  </li>
	              <?php else: ?>
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Non connecté <b class="caret"></b></a>
	                    <ul class="dropdown-menu">
	                        <li><a href="connexion/"> Login</a></li>
	                    </ul>
	                </li>
	                <?php endif; ?>
      			</ul>
	    	</div>
  		</div>
	</nav>
	<div id="baniere">
		<div class="row text-center">
			<img src="Contenu/Images/baniere.jpg" height=""/>
		</div>
	</div>
</div>
