<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Search</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->

    <link rel="stylesheet" href="css/search.css">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>

    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
</head>
<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>
        <div id="stuck_container" class="stuck_container">
            <div class="container">
                <div class="navbar-header">
                    <div class="brand-wrap">
                        <div class="navbar-brand_icon fa-microphone">
                            <span class=""></span>
                        </div>
                        <div class="brand_cnt">
                            <h1 class="navbar-brand">
                                <a href="./">muza</a>
                            </h1>

                            <p class="navbar-slogan">
                                recording studio
                            </p>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-default navbar-static-top ">

                    <ul class="navbar-nav sf-menu navbar-right" data-type="navbar">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="about.html">About</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Who we are</a>
                                </li>
                                <li>
                                    <a href="#">Our news </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Latest</a>
                                        </li>
                                        <li>
                                            <a href="#">Fresh</a>
                                        </li>
                                        <li>
                                            <a href="#">Archive</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Gallery</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="music-lessons.html">Services</a>
                        </li>
                        <li>
                            <a href="videos.html">Works</a>
                        </li>

                        <li>
                            <a href="contact.html">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section id="content" class="content well bg-primary">
            <div class="container">
                <div class="search-form">
                    <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                        <label class="search-form_label" for="in">
                            <input id="in" class="search-form_input" type="text" name="s"
                                   placeholder="Type your search term here..."/>
                            <span class="search-form_liveout"></span>
                        </label>
                        <button type="submit" class="search-form_submit fa-search"></button>
                    </form>
                </div>
                <h3>Search Results</h3>

                <div id="search-results"></div>
            </div>
        </section>
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
        <div class="container">
            <div class="brand-wrap">
                <div class="navbar-brand_icon fa-microphone">
                    <span class=""></span>
                </div>
                <div class="brand_cnt">
                    <h1 class="navbar-brand">
                        <a href="./">muza</a>
                    </h1>

                    <p class="navbar-slogan">
                        recording studio
                    </p>
                </div>
            </div>
            <div class="copyright">
                <em>muza</em> © <span id="copyright-year"></span> |
                <a href="Extra Pages/index-5.html">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<!-- </script> -->




</body>
</html>
