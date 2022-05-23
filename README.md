# Webrcon
Talent Commands for connectivity

## Install

Just download the file and run on your server.

### Instantiating a client

require_once "PHPTelnet.php";

$telnet = new PHPTelnet();

$result = $telnet->Connect('Server Ip',PORT,'Password');

if ($result == 0){

  echo "Telnet Server is working!";	
  
}else{

  echo "Telnet Server is not working!";	
  
}
