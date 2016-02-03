<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16">
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
                <!--<li><a href="ourwork.php">Wat doen wij</a></li>
                <li><a href="testimonials.php">Wie zijn wij</a></li> -->
                <li><a href="projects.php">Projecten</a></li>
                <li><a href="Email.php">Contact</a></li>
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

        <div class="sidebar_container">
            <div class="sidebar">
                <div class="sidebar_item">
                    <h2>Nieuwe Website</h2>
                    <p>Welkom op onze nieuwe website. Neemt u een kijkje, feedback is altijd welkom.</p>
                </div><!--close sidebar_item-->
            </div><!--close sidebar-->
            <div class="sidebar">
                <div class="sidebar_item">
                    <h2>Laatste Update</h2>
                    <h3>Januari 2016</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
                </div><!--close sidebar_item-->
            </div><!--close sidebar-->
            <div class="sidebar">
                <div class="sidebar_item">
                    <h3>January 2016</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
                </div><!--close sidebar_item-->
            </div><!--close sidebar-->
        </div><!--close sidebar_container-->

        <div id="content">
            <div class="content_item">
                <div class="form_settings">
                    <form action="contact_process.php" method="POST">
                        <h2>Neem contact met ons op</h2>
                        <input class="submit" type="submit" name="zend" value="Verzenden" /></p>
                    </form>
                </div><!--close form_settings-->
            </div><!--close content_item-->
        </div><!--close content-->
    </div><!--close main-->
    <div id="footer">
        <p>Copyright &copy; René Janssen <?php setlocale(LC_TIME, 'NL_nl'); echo strftime('%Y');?></p>
    </div><!--close footer-->
</body>
</html>
