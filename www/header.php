<?php
echo '
<div class="navbar navbar-inverse" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<!--  Logo Starts -->
						<a class="navbar-brand" href="#slider"><img src="images/logo/logo.png" width="210" height="35" alt=""></a><!--change-->
						<!-- Logo Ends -->
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav pull-right">
							<li class="current"><a href="index.php#slider" data-toggle="collapse" data-target=".navbar-collapse">HOME</a></li>
							<li><a href="index.php#welcome" data-toggle="collapse" data-target=".navbar-collapse">ABOUT</a></li>
							<li><a href="index.php#message" data-toggle="collapse" data-target=".navbar-collapse">MESSAGE</a></li>
							<li><a href="index.php#team" data-toggle="collapse" data-target=".navbar-collapse">SECRETARIAT</a></li>
							<li><a href="index.php#features-tabs" data-toggle="collapse" data-target=".navbar-collapse">COMMITTEES</a></li>
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">REGISTER&nbsp;&nbsp;<i class="fa fa-caret-down"></i> </a>
								<ul class="dropdown-menu" role="menu">
									<li><a target="_blank" role="menuitem" tabindex="-1" href="daform.php">Delegate Registration</a></li>
									<li><a target="_blank" role="menuitem" tabindex="-1" href="ipform.php" class="external">International Press Registration</a></li>
									<li><a target="_blank" role="menuitem" tabindex="-1" href="ebform.php" class="external">Executive Board Registration</a></li>
								</ul>
							</li>
							<li><a href="index.php#contact" data-toggle="collapse" data-target=".navbar-collapse">CONTACT</a></li>
							
						</ul>
					</div>
					<!--/.nav-collapse --> 
				</div>
			</div>';
?>