<!DOCTYPE html>

<html xml:lang="en" lang="en">

<head>
      <?php include("includes/head.php") ?>
  
      <title>About Me</title>
      <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css">
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/tabs.css">
      <script type="text/javascript">
		$(document).ready(function()
			{$( "#tabs" ).tabs()
			}
		);
      </script>
</head>

<body>
    <div id="part2">
        <?php include("includes/header.php") ?>
        <?php include("includes/navigation.php") ?>
        <div id="main">
			<div id="tabs">
			  <ul>
				<li><a href="#fragment-1">Introduction</a></li>
				<li><a href="#fragment-2">Education</a></li>
				<li><a href="#fragment-3">Work Experience</a></li>
				<li><a href="#fragment-4">Publications</a></li>
				<li><a href="#fragment-5">Contact Me</a></li>
			  </ul>
			  <div id="fragment-1">
				<img src="img/face.jpg" alt="Yang face pic"/>
				<p>I was born in 1983, in the city of Chengdu Sichuan Provicne, which is the biggest city in the southseast of China.
				   Ever since I was a child, I was extremely interested in science, no matter it is Physics, Chemistry or Biology.
				   Therefore, it was natural for me to choose Bioengineering as my major in college. After 4 years of college, 
				   I realized I want to pursue basic research in biology, so I went to graduate school at a research institute of Chinese Academy of Sciences.
				   It took me a year rotating in different labs from plant biology to microbiology, and finally choosed insect innate immunity as my field, 
				   which I have been working on since then.</p>
				<p>After getting my Ph.D, I spent a short period of time in Texas and then came to work at Johns Hopkins Malaria Institute as a postdoc fellow.
				   I continued working on disecting the immune response of mosquito against malaria parasites. 
				   And you can find more details of my research in the research section</p>
				<p>While working at Johns Hopkins, I gradually developed my interest in web developing and started to learn it for fun through various free online resources, 
				   such as <a href="http://www.coursera.org">Coursera</a>, <a href="http://www.udacity.com">Udacity</a> and <a href="http://www.codecademy.com">Codecademy</a>.
				   Recently, I started to take classes from <a href="http://www.extension.harvard.edu">Harvard Extension School</a> online, in the hope of getting a master's degree 
				   in Information Technology.</p>
			  </div>
			  <div id="fragment-2">
				<ul>
				  <li>
				      <img src="img/swjtu.jpg" alt="SWJTU"/>
					  <p>B.S. in Bioengineering 2005</p>
					  <p><a href="http://english.swjtu.edu.cn/public/default.aspx">Southwest Jiaotong University</a>, Sichuan, China</p> 
				 </li>
				  <li>
				      <img src="img/cas.jpg" alt="SIBS"/>
					  <p>Ph.D. in Biology 2010</p> 
					  <p><a href="http://english.sibs.cas.cn/">Shanghai Institutes for Biological Sciences</a></p>
					  <p><a href="http://english.cas.cn/">Chinese Academy of Sciences</a>, Shanghai, China</p> 
					  <p>Mentors: Drs. Liangbiao Zheng &amp; Erjun Ling</p>
					  <p>Focused on mosquito innate immunity</p>
				  </li>
				</ul>
			  </div>
			  <div id="fragment-3">
				<ul>
				  <li>
				      <img src="img/utmb.jpg" alt="UTMB"/>
					  <p>Postdoctoral Fellow</p>
					  <p>6.2010 - 12.2011</p>
					  <p>Dept. of Microbiology &amp; Immunology</p>
					  <p><a href="http://www.utmb.edu/">University of Texas Medical Branch</a>, Galveston, TX</p>
					  <p>Mentor: Dr. Lynn Soong</p>
					  <p>Focused on the interactions of Leishmania parasites and their hosts</p>
				 </li>
				 <li>
				      <img src="img/jhsph.gif" alt="JHSPH"/>
					  <p>Postdoctoral Fellow</p>
					  <p>12.2011 - now </p>
					  <p>Dept. of Molecular Microbiology &amp; Immunology</p>
					  <p><a href="http://www.jhsph.edu/">Johns Hopkins University Bloomberg School of Public Health</a>, Baltimore, MD</p>
					  <p>Mentor: Dr. George Dimopoulos</p>
					  <p>Focused on Anopheles mosquito immune responses against malaria parasites</p>
				  </li>
				</ul>
			  </div>
			  <div id="fragment-4">
				<ol>
				  <li>Tao, Y.Z., Y. Chen, Y.Q. Wu, Z.H. Zhou. High hydrogen yield from a two-step process
					  of dark- and photo-fermentation of sucrose. International J. of Hydrogen
					  Energy 32:200-206, 2007.</li>
				  <li>Chen, Y., Z.H. Weng, L.B. Zheng. Innate immunity against malaria parasites in
					  Anopheles gambiae. Insect Science 15:45-52, 2008.</li>
				  <li>Chen, Y., E.J. Ling, Z.H. Weng. Functional characterization of PGRP-LC1 of
					  Anopheles gambiae through deletion and RNA interference. Insect
					  Science 16:443-453, 2009.</li>
				  <li>Chen, Y., E.J. Ling. Molecular cloning and functional characterization of PGRP-LC1
					  of Anopheles stephensi. Acta Entomologica Sinica 53:131-138, 2010.</li>      
				  <li>Wang, Y., Y. Chen, L. Xin, S.M. Beverley, E.D. Carlsen, V. Popov, K.P. Chang, M.
					  Wang, L. Soong. The microbicidal effects of human histone proteins H2A and H2B on
					  Leishmania promastigotes but not amastigotes. Infect Immun 79:1124-1133, 2011.</li>
				  <li>Liu, F.*, Y. Chen*, B. Yang, J. Wang, Q. Peng, Q. Shao, X. Li, B.T. Beerntsen, Y. Xu, J.
					  Li, X.Q. Yu, E.J Ling. Drosophila melanogaster prophenoloxidases respond
					  inconsistently to Cu2+ and have different activity in vitro. Dev Comp Immunol
					  36:619-628, 2012. (* equal contribution)</li>
				  <li>Li, X., M. Ma, F. Liu, Y. Chen, A. Lu, Q.Z. Ling, J. Li, B.T. Beerntsen, X.Q. Yu, C. Liu, E.
					  Ling. Properties of Drosophila melanogaster prophenoloxidases expressed in
					  Escherichia coli. Dev Comp Immunol 36:648-656, 2012.</li>
				  <li>Chen, Y.*, F. Liu*, B. Yang, Q.Z. Ling, X. Li, B.T. Beerntsen, E.J Ling. Specific amino
					  acids affect Drosophila melanogaster prophenoloxidase-3 auto-activation after
					  expression in S2 cells in vitro. Dev Comp Immunol 38:88-97, 2012. (* equal
					  contribution)</li>    
				  <li>Chen, Y. *, Y. Dong*, S. Sandiford, G. Dimopoulos. Transcriptional mediators Kto and
					  Skd are involved in the regulation of the IMD pathway and anti-Plasmodium defense
					  in Anopheles gambiae. PLoS One 7(9): e45580, 2012. (* equal contribution)</li>   
				  <li>Wanderley, J.L., Y. Chen, P. Deolindo, E. Carlsen, Y. Wang, M. Barcinski, L. Soong.
					  CD4+ T cell-dependent, non-polarized macrophage activation modulates PS
					  exposure on intracellular amastigotes of Leishmania amazonensis. Under review.</li>   
				  <li>Chen, Y., M. Desai, E. Carlsen, L. Soong. Leishmania amastigotes subvert and utilize
					  the host IFN-regulated endocytic/autophagic pathway and lipid metabolic pathway
					  for their infection and intracellular growth. In preparation.</li>
				</ol>
	
	          </div>
	          <div id="fragment-5">
	            <img src="img/flower.jpg" alt="flower"/>
				<p>Yang Chen </p>
				<address>
					<p> Department of Molecular Biology and Immunology<br/>
					Johns Hopkins School of Public Health<br/>
					605 N Wolfe St<br/>
					Baltimore MD 21218</p>
				</address>
				<p><a href="mailto:chenyang83@gmail.com?Subject=Hello" target="_top">Send Mail</a></p>
				<object type="application/x-shockwave-flash" data="https://clients4.google.com/voice/embed/webCallButton" width="230" height="85">
				    <param name="movie" value="https://clients4.google.com/voice/embed/webCallButton" />
				    <param name="wmode" value="transparent" />
				    <param name="FlashVars" value="id=b2c1b7e1feec407899a057baed8493378ce00943&amp;style=0" />
				</object>
			  </div>
			</div>
 	    </div>
	
		<?php include("includes/footer.php") ?>
    </div>

</body>

</html>