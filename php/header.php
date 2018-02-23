
		<div id = "header"> 	<!-- header -->
			
			<div style="float: left;">
					<img src="images/logo.png"> 
				<h1 style="display: block; float: left;">CLEVERO</h1>
				<h4 style="display: block; float: left; margin-left: 100px; margin-top: 30px;" >Task Management TO-DO-LIST</h4>
			</div>
			<div style=" float: right; margin:20px 100px auto auto; ">
				<?php
					if(isset($_SESSION['row'])){
						$row = $_SESSION['row'];
						echo "<a style='color: #fff; text-decoration: none;' href='php/logout.php'>Logout</a>"; 
						echo "<br><br>";
						echo "Welcome <p style='color:green; display:inline;' > {$row['username']} </p>";
					}

				?>
				
			</div>

		</div>