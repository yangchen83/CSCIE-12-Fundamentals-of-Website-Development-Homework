<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("includes/head.php") ?>
        
        <title>Yang Chen Home</title>
        <link rel="stylesheet" type="text/css" href="css/jcarousel.basic.css">
        <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="js/jcarousel.basic.js"></script>
    </head>
    <body>
        <div id="part1">
			<?php include("includes/header.php") ?>
			<?php include("includes/navigation.php") ?>
		
			<div class="main">
			    <div class="clearme"></div>
				<div class="jcarousel-wrapper">
					<div class="jcarousel">
						<ul>
							<li>
								<a href="#"><img src="img/main1.jpg" width="1000" height="400" alt="Website Debut"></a>                       
							</li>
							<li>
								<a href="http://malaria.jhsph.edu/events/2014%20Events/2014%20World%20Malaria%20Day/WorldMalariaDay.html"><img src="img/main2.jpg" width="1000" height="400" alt="Malaria Day"></a>                                                
							</li>
							<li>
								<a href="http://www.easternstate.org"><img src="img/main3.jpg" width="1000" height="400" alt="Eastern State Penitentiary"></a>                                              
							</li>
						</ul>
					</div>
					<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
					<a href="#" class="jcarousel-control-next">&rsaquo;</a>
			
					<p class="jcarousel-pagination"></p>
					</div>
			</div>
		
			<?php include("includes/footer.php") ?>
		</div>

    </body>
</html>
