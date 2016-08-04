
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/allinone.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/add.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/search.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/update.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/delete.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/contactpop.php';
?>
	
	
	
	

		
	<nav class="navbar navbar-inverse navbar-fixed-top"> <!-- to add nav bar-->
		<div class="container">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" ><!-- navigation button-->
				<span class="sr-only">Toggle Navigation</span> <!-- navigation icon-->
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">YouReserve</a> <!--brand name-->
			<div class="navbar-collapse collapse"><!-- for the menue items like home etc-->
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Employeee<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#all" data-toggle="modal" data-target="#all">Full Form</a></li>
							<li><a href="#add" data-toggle="modal" data-target="#add">Add</a></li>
							<li><a href="#search" data-toggle="modal" data-target="#search">Search</a></li>
							<li><a href="#update" data-toggle="modal" data-target="#update">Update</a></li>
							<li><a href="#delete" data-toggle="modal" data-target="#delete">Delete</a></li>
							<li><a href="inc/viewall.php" >View All</a></li>
							
						</ul>
					</li>
					<li><a href="#">About</a></li>
					
					<li><a href="#contact" data-toggle="modal" data-target="#contact">Contact</a>
<!-- You need to set data-target as target id of your modal and data-toggle = "modal" to the button on which you want to activate the modal -->
						
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="body">
	