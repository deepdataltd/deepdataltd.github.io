<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Search Result</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">

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
                    <h1 class="navbar-brand">
                        <a href="./">MailJet</a>
                    </h1>
                </div>

                <nav class="navbar navbar-default navbar-static-top ">
                    <ul class="navbar-nav sf-menu navbar-right" data-type="navbar">
                        <li>
                            <a href="./">About us </a>
                        </li>
                        <li class="dropdown">
                            <a href="index-1.html">Our services</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">News</a>
                                </li>
                                <li>
                                    <a href="#">Events</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Setup</a>
                                        </li>
                                        <li>
                                            <a href="#">Marketing</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Prices</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index-2.html">Clients</a>
                        </li>
                        <li>
                            <a href="index-3.html">Careers</a>
                        </li>
                        <li>
                            <a href="index-4.html">Contacts</a>
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
    <section id="content" class="content well6 bg-warning">
        <div class="container">
          <div class="search-form">
                  <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
                                             <label class="search-form_label">
                                                 <input class="search-form_input" type="text" name="s" autocomplete="off"
                                                        placeholder=""/>
                                                 <span class="search-form_liveout"></span>
                                             </label>
                                             <button class="search-form_submit fa-search text-primary" type="submit"></button>
                                         </form>
            </div>  
            <h3 class="text-center">Search Results</h3>
            <div id="search-results"></div>
        </div>
    </section>
  </main>  

   <!--========================================================
                            FOOTER
  =========================================================-->
    <footer>
        <div class="container center767">
            <section>
                <h6>Follow Us on Social Networks</h6>
                <ul class="inline-list">
                    <li><a href="#" class="fa-facebook-square"></a></li>
                    <li><a href="#" class="fa-linkedin-square"></a></li>
                    <li><a href="#" class="fa-instagram"></a></li>
                    <li><a href="#" class="fa-pinterest-square"></a></li>
                    <li><a href="#" class="fa-twitter-square"></a></li>
                </ul>
            </section>

            <p class="copyright"><span id="copyright-year"></span>
                copiryght by MailJet. <a href="index-5.html">PrivacyPolicy</a>
            </p>
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
