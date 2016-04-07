<?php

if(isset($_POST['email'])) {
    $email_to = "webmaster@labcode.de";

    $email_subject = "Website Contact";


    function died($error) {

        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }



    // validation expected data exists

    if(!isset($_POST['name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['message'])) {


        died('We are sorry, but there appears to be a problem with the form you submitted.');

    }
    if($_POST['g-recaptcha-response'] == false)
    {
    ?>
          Das NoCaptcha wurde falsch beantwortet.
          Bitte gehe <a href="#" onclick="history.back(-1)">Zur&uuml;ck</a>
          <?php
    }

    if($_POST['g-recaptcha-response'] == true)
    {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $email_message = "Form details below.\n\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";

    $email_message .= "Message: ".clean_string($message)."\n";


	// create email headers

	$headers = 'From: '.$email."\r\n".

	'Reply-To: '.$email."\r\n" .

	'X-Mailer: PHP/' . phpversion();

	@mail($email_to, $email_subject, $email_message, $headers);


?>

<!DOCTYPE HTML>

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
	<meta name="theme-color" content="#2196F3">
	<title>Home - LabCode</title>

	<!-- CSS  -->
	<link href="min/plugin-min.css" type="text/css" rel="stylesheet">
	<link href="min/custom-min.css" type="text/css" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
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
		<nav id="nav_f" class="default_color">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#" id="logo-container" class="brand-logo"><span class="extralight-headline">Lab</span><span class="light-headline">Code</span></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="#apps">Applications</a></li>
						<li><a href="#team">Team</a></li>
						<li><a href="#contact">Kontakt</a></li>
					</ul>
					<ul id="nav-mobile" class="side-nav">
						<li><a href="#apps">Applications</a></li>
						<li><a href="#team">Team</a></li>
						<li><a href="#contact">Kontakt</a></li>
					</ul>
					<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				</div>
			</div>
		</nav>
	</div>

	<!--Hero-->
	<div class="section no-pad-bot" id="index-banner">
		<div class="container">
			<h1 class="text_h center header cd-headline letters type">
            <span>Love for</span>
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">creating</b>
                <b>designing</b>
                <b>developing</b>
            </span>
        </h1>
		</div>
	</div>

	<!--Intro and service-->
	<div id="intro" class="section scrollspy">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h2 class="center header text_h2">Dein<span class="span_h2"> Kontaktformular </span>wurde<span class="span_h2"> abgesendet.</span> </h2>
				</div>
				<!--<div  class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-image-flash-on"></i>
                    <h5 class="promo-caption">Speeds up development</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-social-group"></i>
                    <h5 class="promo-caption">User Experience Focused</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-hardware-desktop-windows"></i>
                    <h5 class="promo-caption">Fully responsive</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                </div>
            </div>
        --></div>
		</div>
	</div>


	<!--Apps-->
	<div class="section scrollspy" id="apps">
		<div class="container">
			<h2 class="header text_b">Applications </h2>
			<div class="row">
				<div class="col s12 m4 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img alt="Taschenrechner-Bild" class="activator" src="img/calculator.svg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Taschenrechner <i class="mdi-navigation-more-vert right"></i></span>
							<p><a href="webapps/rechner.html">Link zum
 Taschenrechner</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Taschenrechner <i class="mdi-navigation-close right"></i></span>
							<p>Mit dem Taschenrechner kann man Multiplizieren(x), Dividieren(/), Addieren(+) und Subtrahieren(-)</p>
						</div>
					</div>
				</div>
				<div class="col s12 m4 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img alt="W&uuml;rfel-Bild" class="activator" src="img/dices.svg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Zahlenraten <i class="mdi-navigation-more-vert right"></i></span>
							<p><a href="/webapps/zahlenraten.html">Link zum Spiel Zahlenraten</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Zahlenraten <i class="mdi-navigation-close right"></i></span>
							<p>Bei Zahlenraten errät man ein Zahl von 0 bis 100.</p>
						</div>
					</div>
				</div>
				<div class="col s12 m4 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img alt="Quiz-Bild" class="activator" src="img/dice.svg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Zufallsgenerator <i class="mdi-navigation-more-vert right"></i></span>
						<p><a href="/webapps/zufall.html">Link zum Zufallsgenerator</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Zufallsgenerator <i class="mdi-navigation-close right"></i></span>
							<p>Beim Zufallsgenerator kann man einen Graphischen M&uuml;nzwurf oder eine Zahl von 0 bis 10 bzw. 100.</p>
						</div>
					</div>
				</div>
<!--            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project4.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Project link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project5.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Project link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project6.jpeg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Project link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            -->
			</div>
		</div>
	</div>

	<!--Parallax-->
	<div class="parallax-container">
		<div class="parallax"><img alt="Parallax" src="img/parallax3.svg"></div>
	</div>

	<!--Team-->
	<div class="section scrollspy" id="team">
		<div class="container">
			<h2 class="header text_b"> Unser Team </h2>
			<div class="row">
				<div class="col s12 m3">
					<div class="card card-avatar">
						<div class="waves-effect waves-block waves-light">
							<img alt="Avatar1" class="activator" src="img/avatar1.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">HTML <br/>
                            <small><em><a class="red-text text-darken-1" href="#">CEO</a></em></small></span>
						</div>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card card-avatar">
						<div class="waves-effect waves-block waves-light">
							<img alt="Avatar2" class="activator" src="img/avatar2.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">CSS<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Designer</a></em></small>
                        </span>
						</div>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card card-avatar">
						<div class="waves-effect waves-block waves-light">
							<img alt="Avatar3" class="activator" src="img/avatar3.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">JS <br/>
                            <small><em><a class="red-text text-darken-1" href="#">Technician</a></em></small></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Footer-->
	<footer id="contact" class="page-footer default_color scrollspy">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<form class="col s12" action="contact.php" method="post">
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
				<!--<div class="col l3 s12">
					<h5 class="white-text">joashpereira.com</h5>
					<ul>
						<li><a class="white-text" href="http://www.joashpereira.com/">Home</a></li>
						<li><a class="white-text" href="http://www.joashpereira.com/blog">Blog</a></li>
					</ul>
				</div>
				<div class="col l3 s12">
					<h5 class="white-text">Social</h5>
					<ul>
						<li>
							<a class="white-text" href="https://www.behance.net/joashp">
								<i class="small fa fa-behance-square white-text"></i> Behance
							</a>
						</li>
						<li>
							<a class="white-text" href="https://www.facebook.com/joash.c.pereira">
								<i class="small fa fa-facebook-square white-text"></i> Facebook
							</a>
						</li>
						<li>
							<a class="white-text" href="https://github.com/joashp">
								<i class="small fa fa-github-square white-text"></i> Github
							</a>
						</li>
						<li>
							<a class="white-text" href="https://www.linkedin.com/in/joashp">
								<i class="small fa fa-linkedin-square white-text"></i> Linkedin
							</a>
						</li>
					</ul>
				</div>-->
			</div>
		</div>
		<div class="footer-copyright default_color">
			<div class="container">
				Powered by <a class="white-text" href="http://zen.coderdojo.com/dojo/385">CoderDojo CGN,<a/> <a class="white-text" href="http://joashpereira.com">Joash Pereira</a>. Thanks to <a class="white-text" href="http://materializecss.com/">materializecss</a>
			</div>
		</div>
	</footer>


	<!--  Scripts-->
	<script src="min/plugin-min.js"></script>
	<script src="min/custom-min.js"></script>
	<script src="http://labcode.de/js/font.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</body>

</html>




Thank you for contacting me. Will be in touch with you very soon.



<?php

}
}
?>
