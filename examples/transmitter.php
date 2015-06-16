<?php
//print "<pre>";
require_once "smpp.php";
$tx=new SMPP('host',port); // make sure the port is integer
//$tx->debug=true;
$tx->system_type="";
$tx->addr_npi=1;
//print "open status: ".$tx->state."\n";
$tx->bindTransmitter("username","password");
$tx->sms_source_addr_npi=1;
//$tx->sms_source_addr_ton=1;
$tx->sms_dest_addr_ton=1;
$tx->sms_dest_addr_npi=1;
$tx->sendSMS("2121","mobile no","Hello world!");
$tx->close();
unset($tx);
//print "</pre>";
?>
