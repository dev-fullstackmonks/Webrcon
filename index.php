<?php
include_once("webrcon.php");
$host = ''; // Server host name or IP
$port = ''; // Port rcon is listening on
$password = ''; // rcon.password setting set in server.properties
$client = new Client("ws://{$host}:{$port}/{$password}");
$data = array(
  'Identifier' => 0,
  'Message' => 'oxide.show group admin',
  'Stacktrace' => '',
  'Type' => 3
);
$client->send(json_encode($data));
if($client->__getStatus() == 'yes'){
  echo "WebRCON server connection successful.";
  $client->__destruct();
}else{
  echo 'Connection failed. Please check your server details. Also ensure the server is running and the ports are open.';
}
?>
