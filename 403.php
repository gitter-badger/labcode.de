
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>403 - LabCode</title>

    <!-- CSS  -->
    <link href="//labcode.de/min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="//labcode.de/min/custom-min.css" type="text/css" rel="stylesheet">
    <link href="//labcode.de/css/style.css" type="text/css" rel="stylesheet">
    <script src="//data.labcode.de/js/gsc.js"></script>
    <script src="//labcode.de/js/font.js"></script>
</head>
<body id="top" class="scrollspy">

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

<!--Navigation-->
<div class="navbar-fixed">
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
                <a href="//labcode.de#" id="logo-container" class="brand-logo"><span class="extralight-headline">Lab</span><span class="light-headline">Code</span></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="//labcode.de#">Home</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="//labcode#">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="text_h center header cd-headline letters type">
            <span>403 That's an error</span>
        </h1>
    </div>
</div>

<!--Intro and service-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h2 class="center header text_h2">Der Autor der Site
                    wusste nicht, dass <span class="span_h2">coole</span> URLs (<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']?>) nicht verboten sind aufzurufen und hat daher diese Seite gesperrt.</h2>
            </div>

        </div>
    </div>
</div>
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" action="//data.labcode.de/contact.php" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" name="name" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" name="email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Nachricht</label>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LfQuBMTAAAAANcAGKdDzIvE8av9A0DdDmRm16ai"></div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit">Absenden
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            Powered by <a class="white-text" href="//zen.coderdojo.com/dojo/385">CoderDojo CGN,<a/> <a class="white-text" href="http://joashpereira.com">Joash Pereira</a>. Thanks to <a class="white-text" href="http://materializecss.com/">materializecss</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="//labcode.de/min/plugin-min.js"></script>
<script src="//labcode.de/min/custom-min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>
