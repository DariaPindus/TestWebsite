<?php
	session_start();
	?>
<html>
<head>
    <meta charset="utf-8" />	
	<title>My Website</title>
    <meta name="viewport" content="user-scalable=yes, width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/minor.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!--<script src="js/menu.js"></script>
<script src="js/main.js"></script>-->
</head>
<body>
    <div id="above">
    <header>
        <div  id="logo">
            <?php if(isset($_SESSION['login'])){
				echo '<a href="index_after_reg.php">';
			} else
				echo '<a href="index.html">';
			?>
            <h1><span id="name" >Alie Stylist </span></h1></a>
            <h3> Your own shopping guide</h3>
        </div>
    </header>
	<div id="user_acts">
		<?php if(isset($_SESSION['login'])){
			$name = $_SESSION['login'];
			echo '
			<a href="#signup">Hi, '.$name.'</a>
			<a href="logout.php" onclick="LoggingOut()">Log out</a>';
		}
		else {
			echo '<a href="#signup" id="first">Register</a>
			<a href="#signin">Log in</a>';
		}
		?>
	</div>
    <nav>
        <?php if(isset($_SESSION['login'])){
				echo '<a href="index_after_reg.php" class="selected">Home</a>';
			} else
				echo '<a href="index.html" class="selected">Home</a>';
			?>
        <a href="alie.html">Aliexpress</a>
        <a href="sales.html">Sales</a>
        <a  href="content.php">Content</a>
        <a href="about.php">About Us</a>
    </nav>
    </div>
    
    <div id="content">
        <div id="side_bar">
            <ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="alie.html">Aliexpress</a></li>
			<li><a href="sales.html">Sales</a></li>
			<li><a href="content.php">Content</a></li>
			<li><a href="about.html">About Us</a></li>
		</ul>
        </div>
		
		<div id="main">
			<h1> About us </h1>
			<div id="info">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et congue elit. Nullam non suscipit leo, condimentum aliquet enim. Morbi ac condimentum eros, ac ultricies felis. Vivamus commodo pellentesque urna a efficitur. Quisque laoreet molestie egestas. Vivamus rutrum neque ultrices enim aliquam pretium. <br>
Nam ultrices non tellus nec tempor. Donec vel vestibulum enim. Aliquam erat volutpat. Quisque id lacus vitae velit ornare mattis at nec massa. Ut aliquet odio in felis venenatis dignissim. Nulla consectetur, mauris ut semper pretium, elit est consectetur est, vel pharetra ante felis in nisl. ccumsan nibh auctor ut. <br>
Morbi eleifend ipsum at lorem suscipit, vitae consectetur est viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
				</p>
			</div>
		</div>
		
		<footer>
		<ul class="icons">
			<li><a href="facebook.com"><img src="img/icons/fb.png"/></a></li>
			<li><a href="instagram.com"><img src="img/icons/inst.png"/></a></li>
			<li><a href="twitter.com"><img src="img/icons/twit.png"/></a></li>
		</ul>	
	</footer>
    </div>