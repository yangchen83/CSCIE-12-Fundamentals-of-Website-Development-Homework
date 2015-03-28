<!DOCTYPE html>
<html xml:lang="en" lang="en">
    <head>
        <?php include("includes/head.php") ?>    
        <title>The World Seen By My iPhone</title>
        <link type="text/css" rel="stylesheet" href="css/colorbox.css">
        <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/slideshow.css">
        <script type="text/javascript">
			$(document).ready(function() {
				$('a.gallery').colorbox({
				   rel:'group1',
				   slideshow: true
				   });
			   })
        </script>
    </head>
    <body>
        <div id="part6">
			<?php include("includes/header.php") ?>
			<?php include("includes/navigation.php") ?>
		
			<div class="main">
				<div class="clearme"></div>
				<div class="photo">
					<p><a href="photography.php">Photography</a> --> World Seen By My iPhone</p>
				 
					<a class='gallery' href='img/i1.jpg'><img src="img/i1t.jpg" alt="iPhone pic"/></a>
					<a class='gallery' href='img/i2.jpg'><img src="img/i2t.jpg" alt="iPhone pic"/></a>
					<a class='gallery' href='img/i3.jpg'><img src="img/i3t.jpg" alt="iPhone pic"/></a>
					<a class='gallery' href='img/i4.jpg'><img src="img/i4t.jpg" alt="iPhone pic"/></a>
					<a class='gallery' href='img/i5.jpg'><img src="img/i5t.jpg" alt="iPhone pic"/></a>
					<a class='gallery' href='img/i6.jpg'><img src="img/i6t.jpg" alt="iPhone pic"/></a>
					<a class='gallery' href='img/i7.jpg'><img src="img/i7t.jpg" alt="iPhone pic"/></a>
					<a class='gallery' href='img/i8.jpg'><img src="img/i8t.jpg" alt="iPhone pic"/></a>
					<a class='gallery' href='img/i9.jpg'><img src="img/i9t.jpg" alt="iPhone pic"/></a>
					<a class='gallery' href='img/i10.jpg'><img src="img/i10t.jpg" alt="iPhone pic"/></a>
					<a class='gallery' href='img/i11.jpg'><img src="img/i11t.jpg" alt="iPhone pic"/></a>
					<a class='gallery' href='img/i12.jpg'><img src="img/i12t.jpg" alt="iPhone pic"/></a>
				</div>
			</div>
			
			<?php include("includes/footer.php") ?>
		</div>      
    </body>
</html>