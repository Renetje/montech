<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Montech benelux B.V.</title>
  <meta name="description" content="" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
  </script> 
</head>

<body>
  <div id="main">

  	<div id="menubar">
	  <div id="welcome">
	    <h1><a href="#">Montech benelux B.V.</a></h1>
	  </div><!--close welcome-->
      <div id="menu_items">
		  <ul id="menu">
			  <li><a href="index.php">Home</a></li>
			  <li><a href="ourwork.php">Wat doen wij</a></li>
			  <li class="current"><a href="testimonials.php">Wie zijn wij</a></li>
			  <li><a href="projects.php">Projecten</a></li>
			  <li><a href="contact.php">Contact</a></li>
		  </ul>
      </div><!--close menu-->
    </div><!--close menubar-->	
    
	<div id="site_content">	

	  <div id="banner_image">
	    <div id="slider-wrapper">
			<div id="slider" class="nivoSlider">
				<img src="images/construction2.jpg" alt="" />
				<img src="images/construction.jpg" alt="" />
				<img src="images/construction1.jpg" alt=""/>
				<img src="images/Bcard.jpg" alt=""/>
				<img src="images/construction3.jpg" alt=""/>
			</div><!--close slider-->
		</div><!--close slider_wrapper-->
	  </div><!--close banner_image-->	


	   
      <div id="content">
        <div class="content_item">
          <h2>Persoonlijk</h2>
			<div class="content_container">
			  <h3>Peter's Bloggs</h3>
			  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim. Aliquam facilisis neque non nunc posuere eget volutpat metus tincidunt.&rdquo;</p>
			</div><!--close content_container-->
            <div class="content_container">
			  <h3>Arthur's Bloggs</h3>
			  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim. Aliquam facilisis neque non nunc posuere eget volutpat metus tincidunt.&rdquo;</p>
			</div><!--close content_container--> 
		<!--close content_container-->
	    </div><!--close content_item-->
	  </div><!--content-->

		<div id="content_blue">
			<div class="content_blue_container_box">
				<h4>Laatste Blog Post</h4>
				<p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
				<div class="readmore">
					<a href="#">Lees meer</a>
				</div><!--close readmore-->
			</div><!--close content_blue_container_box-->
			<div class="content_blue_container_box">
				<h4>Laatste nieuws</h4>
				<p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
				<div class="readmore">
					<a href="#">Lees meer</a>
				</div><!--close readmore-->
			</div><!--close content_blue_container_box-->
			<div class="content_blue_container_boxl">
				<h4>Laatste Projecten</h4>
				<p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
				<div class="readmore">
					<a href="#">Lees meer</a>
				</div><!--close readmore-->
			</div><!--close content_blue_container_box1-->
			<br style="clear:both"/>
		</div><!--close content_blue-->
	</div><!--close site_content--> 
 
  </div><!--close main-->

  <div id="footer">
	  <p>Copyright &copy; René Janssen <?php setlocale(LC_TIME, 'NL_nl'); echo strftime('%B %Y');?></p>
  </div><!--close footer-->

</body>
</html>
