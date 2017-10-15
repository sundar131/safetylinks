<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css"/>

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>    
  	<script src='js/selectivizr-min.js'></script>
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
                    <nav class="nav">
                        <ul class="sf-menu" data-type="navbar">
                            <li>
                                <a href="./">Home</a>
                            </li>
                            <li>
                                <a href="index-1.html">About</a>
                            </li>
                            <li>
                                <a href="index-2.html">Services</a>
                                <ul>
                                    <li>
                                        <a href="#">Dolore</a>
                                    </li>
                                    <li>
                                        <a href="#">Massa</a>
                                        <ul>
                                            <li>
                                                <a href="#">Astum</a>
                                            </li>
                                            <li>
                                                <a href="#">Nostrud</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Laoreetum</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="index-3.html">Clients</a>
                            </li>
                            <li>
                                <a href="index-4.html">Contacts</a>
                            </li>
                        </ul>
                    </nav>
                    <ul class="inline-list">
                        <li><a class="fa-map-marker" href="#"></a></li>
                        <li><a class="fa-envelope" href="#"></a></li>
                        <li><a class="fa-phone" href="#"></a></li>
                    </ul>
                </div>
            </div>

            <div class="container cont_header">
                <div class="brand_img"><img src="images/logo.png" alt=""/></div>
                <div class="brand">
                    <h1 class="brand_name">
                        <a href="./">Safety Consultants</a>
                    </h1>

                    <p class="brand_slogan">
                        Health is above wealth
                    </p>
                </div>
                <div class="srch_header">
                    <ul class="inline-list2">
                        <li><a class="fa-tumblr-square" href="#"></a></li>
                        <li><a class="fa-twitter-square" href="#"></a></li>
                        <li><a class="fa-youtube" href="#"></a></li>
                        <li><a class="fa-rss" href="#"></a></li>
                    </ul>
                    <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
                        <label class="search-form_label">
                            <input class="search-form_input" type="text" name="s" autocomplete="off"/>
                            <span class="search-form_liveout"></span>
                        </label>
                        <button class="search-form_submit fa-search" type="submit"></button>
                    </form>
                </div>
            </div>
        </header>

    <!--========================================================
                              CONTENT
    =========================================================-->
    <section id="content" class="content well bg-secondary">
        <div class="container ">
            <h4>Search Results</h4>
            <div id="search-results"></div>
        </div>
    </section>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
            <div class="container">
                <div class="row">
                    <div class="grid_6">
                        <div class="brand">
                            <h1 class="brand_name">
                                <a href="./">Safety <br/> Consultants</a>
                            </h1>
                        </div>
                        <p class="copyright">
                            © <span id="copyright-year"></span>
                            <a href="index-5.html">Privacy Policy</a>
                        </p>
                        <ul class="inline-list3">
                            <li><a class="fa-tumblr-square" href="#"></a></li>
                            <li><a class="fa-twitter-square" href="#"></a></li>
                            <li><a class="fa-youtube" href="#"></a></li>
                            <li><a class="fa-rss" href="#"></a></li>
                            <li><a class="fa-facebook-square" href="#"></a></li>
                            <li><a class="fa-google-plus-square" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
</div>

<script src="js/script.js"></script>

</body>
</html>