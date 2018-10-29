<?php
require("header.php");
?>
	<body>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
			<div class="item active">
				<img class="image" src="public/images/image.jpg" alt="">
				<div class="carousel-caption">
				</div>
			</div>
			<div class="item">
				<img class="image" src="public/images/image1.jpg" alt=""/>
				<div class="carousel-caption">
				</div>
			</div>
			<div class="item">
				<img class="image" src="public/images/image5.jpg" alt="">
				<div class="carousel-caption">
				</div>
			</div>
			</div>
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
			<script src="public/javascripts/jquery-2.1.1.min.js"></script>
			<script src="public/javascripts/bootstrap.min.js"></script>
			<script src="public/javascripts/jquery.js"></script>
	  </body>
	</html>
