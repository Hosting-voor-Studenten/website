<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55045043-1', 'auto');
  ga('send', 'pageview');

</script>

<?php
  $bg = array('bg-0.jpg', 'bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg',  ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Hosting Studenten</title>

  
  <link rel="stylesheet" href="css/foundation.css" />
	  <link rel="stylesheet" href="css/animate.css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<script src="http://use.edgefonts.net/allerta:n4:all;open-sans:n7,i7,n8,i8,i4,n3,i3,n4,n6,i6:all.js"></script>
 <script src="http://use.edgefonts.net/open-sans:n7,i7,n8,i8,i4,n3,i3,n4,n6,i6:all.js"></script>
 <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="js/smoothscroll.js"></script>


  <script src="js/vendor/custom.modernizr.js"></script>
    <style type="text/css">
<!--
body{
background: url(img/<?php echo $selectedBg; ?>) no-repeat center center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
        height:100vh;
}
-->
</style>
    
    <?php
require_once('transip/DomainService.php');

if(isset($_POST['domain']) && strlen($_POST['domain']) > 0)
{
	$domain = $_POST['domain'];

	try
	{
		// Request the availability of a domain by using the Transip_DomainService API;
		// we can get the following different statusses back with different meanings.
		$availability = Transip_DomainService::checkAvailability($domain);
		switch($availability)
		{
			case Transip_DomainService::AVAILABILITY_INYOURACCOUNT:
				$result = htmlspecialchars($domain) 
							. ' is helaas niet meer beschikbaar.';
			break;

			case Transip_DomainService::AVAILABILITY_UNAVAILABLE:
				$result = htmlspecialchars($domain) 
							. ' is niet beschikbaar hiervoor.';
			break;

			case Transip_DomainService::AVAILABILITY_FREE:
				$result = htmlspecialchars($domain) 
							. ' is nog vrij!';
                ?> <script>

    $(document).ready( function() {

 if ( $( ".registrationForm" ).is( ":hidden" ) ) {
  
    $( ".registrationForm" ).slideDown( 1000  );
   
  } else {
    $( ".registrationForm" ).hide();
  }

    });
    </script>
   <?php    
 
			break;


			case Transip_DomainService::AVAILABILITY_NOTFREE:
				$result = htmlspecialchars($domain) 
							. ' is geregistreerd.';
			break;
		}
	}
	catch(SoapFault $e)
	{
		// It is possible that an error occurs when connecting to the TransIP Soap API,
		// those errors will be thrown as a SoapFault exception.
		$result = 'An error occurred: ' . htmlspecialchars($e->getMessage());
	}
     
}
else
{
	$domain = '';
	$result = '';
}

?>

    

</head>
<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/all.js#xfbml=1&appId=145628852180521";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    

  <!--<div class="menu">
 
  <img src="img/logo.png" width="230" id="logo">

  </div>-->
  <div class="slider">
  <div class="title-slider animated fadeInDown">Kijk <strong>snel</strong> of <strong>jouw domeinnaam</strong> nog <strong>vrij</strong> is
<form name="domainChecker" id="domainChecker" method="post">
		<input type="text" name="domain" id="domein" autofocus value="<?=htmlspecialchars($domain)?>"  onfocus="if(this.value == 'Type hier jouw domeinnaam') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Type hier jouw domeinnaam'; }">
		<input type="submit" id="check" name="check" value="Check"/><br/>
		<div class="message <?php if (strpos($result,'vrij'))  { echo 'positive '; $showRegForm = true; } else { echo 'negative ';} if ($result) { echo 'padding-text'; }?> "><?=$result?></div>
	</form>
    </div>
      <ul class="top-menu">
      <li><a href="">Home</a></li>
      <li><a href="">Over Ons</a></li>
      <li><a href="">Pakketten</a></li>
      <li><a href="">Vragen</a></li>
      <li><a href="">Contact</a></li>
  </ul>
  </div>
  
    <div class="registrationForm">
             <?php
                    if ($_POST['verzenden']) { 
                   
    
    // multiple recipients
$to  = 'r.samsen@live.nl' . ', '; // note the comma
$to .= 'renesamsen@gmail.com';

// subject
$subject = 'Birthday Reminders for August';
    
                            $naam = htmlspecialchars($_POST['name']);  
                            $email = htmlspecialchars($_POST['email']);  
                            $domein = htmlspecialchars($_POST['domain']);  
                            $straatnaam = htmlspecialchars($_POST['streetname']);  
                            $huisnummer = htmlspecialchars($_POST['housenumber']);  
                            $postcode = htmlspecialchars($_POST['zipcode']);  
                            $woonplaats = htmlspecialchars($_POST['city']);  
               
                            $tijd = time();  
                            $datum = strftime('%d/%m/%y %H:%M', $tijd);  
                            $ip = getenv('REMOTE_ADDR');  
                            $message = $naam.' met het e-mailadres '.$email.' en het IP '.$ip.' verstuurde op '.$datum.' de volgende aanvraag:  
                            ____________________________________   <br><br>
                            Naam: '.$naam.'<br>
                            Email: '.$email.'<br>
                            Straat + huisnummer: '.$straatnaam.' '.$huisnummer.'<br>
                            PC + Woonplaats: '.$postcode.' '.$woonplaats.'<br>
                            Domein:  '.$domein.'<br>
                        
                            ------------------------------------';  
                           // To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
                            echo '<div class="succes">Uw bericht is verzonden. <br/>U krijgt zo snel mogelijk antwoord.</div>';  
                        }
                    
                ?>
    	
                   
         
        
    <form name="registration" id="registration" action="" method="post">
    <div class="row collapse ">
    <div class="large-6 small-centered columns">
      <label>
        <input type="text" class="input-text" name="name" placeholder="Volledige naam *" />
      </label>
    </div>
     </div>
        <div class="row collapse ">
    <div class="large-6 small-centered columns">
      <label>
        <input type="text" class="input-text" name="email" placeholder="E-mailadres *" />
      </label>
    </div>
         </div>
  <div class="row collapse ">
    <div class=" large-6 small-centered columns">
      <input type="text" class="input-text"  name="domain" value="<?=htmlspecialchars($domain) ;?>">
    </div>
    <div class="row collapse ">
    <div class=" large-6 small-centered columns">
      <input type="submit" class="button postfix" value="Verzend!" name="verzenden" id="submit-button" />
        </div>
        </div>
  </div>
               </form>
    </div>


  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>

</html>
