<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
// Include domainservice
	require_once('Transip/DomainService.php');
	$domain = 'www.renesamsen1221.nl'; 
	$nameservers = array(); 
	$nameservers[] = new Transip_Nameserver("ns1.media-enzo.nl"); 
	$nameservers[] = new Transip_Nameserver("ns2.media-enzo.nl"); 
	$users = array(); 
	$user = new Transip_WhoisContact(); 
	
	$user->type = "registrant"; 
	$user->firstName = 'jan'; 
	$user->middleName = 'middelnaam'; 
	$user->lastName = 'achternaam'; 
	$user->street =  'straat'; 
	$user->number =  '9'; 
	$user->postalCode =  '8276 ak'; 
	$user->city =  'Zalk'; 
	$user->country =  'nl'; 
	$user->phoneNumber =  '0383783388'; 
	$user->faxNumber = ''; 
	$user->email =  'email@email.com'; 
	$users[] = $user; $user = new Transip_WhoisContact(); 
	
	$user->type = "administrative"; 
	
	$user->companyName = "*"; 
	$user->companyKvk = "*"; 
	$user->companyType = '*'; 
	$user->firstName = 'jan'; 
	$user->middleName = 'middelnaam'; 
	$user->lastName = 'achternaam'; 
	$user->street =  'straat'; 
	$user->number =  '9'; 
	$user->postalCode =  '8276 ak'; 
	$user->city =  'Zalk'; 
	$user->country =  'nl'; 
	$user->phoneNumber =  '0383783388'; 
	$user->faxNumber = ''; 
	$user->email =  'email@email.com'; 
	$users[] = $user; 
	
	$user = new Transip_WhoisContact(); 
	$user->type = "technical"; 
	
	$user->companyName = "*";
	$user->companyKvk = "*"; 
	$user->companyType = '*';
	
	$user->firstName = 'jan'; 
	$user->middleName = 'middelnaam'; 
	$user->lastName = 'achternaam'; 
	$user->street =  'straat'; 
	$user->number =  '9'; 
	$user->postalCode =  '8276 ak'; 
	$user->city =  'Zalk'; 
	$user->country =  'nl'; 
	$user->phoneNumber =  '0383783388'; 
	$user->faxNumber = ''; 
	$user->email =  'email@email.com'; 
	$users[] = $user; 
	
	$result = true; try { 
	// Request the availability of a domain by using the Transip_DomainService API;
 // we can get the following different statusses back with different meanings.
  $availability = Transip_DomainService::checkAvailability($domain); 
  switch($availability) { 
  	case Transip_DomainService::AVAILABILITY_FREE: 
  	echo htmlspecialchars($domain) . ' is vrij voor registratie.<hr/>'; 
	try { 
		$register = new Transip_Domain($domain, $nameservers, $users); 
		Transip_DomainService::register($register); 
	} 
	catch (SoapFault $f) { 
  		// It is possible that an error occurs when connecting to the TransIP Soap API, 
  		// those errors will be thrown as a SoapFault exception. 
  		echo ('An error occurred: ' . htmlspecialchars($f->getMessage())); 
		$result = false; 
	} 
	break; 
	default: echo htmlspecialchars($domain) . ' is niet beschikbaar. Registratie afgebroken.'; 
		$result = false; break; 
		} 
		} 
		catch(SoapFault $e) { 
  // It is possible that an error occurs when connecting to the TransIP Soap API, 
  // those errors will be thrown as a SoapFault exception. 
  echo 'An error occurred: ' . htmlspecialchars($e->getMessage()); $result = false; } if($result) { 
  // hier doe je de database bijwerken 
  }
  ?>
</body>
</html>
