<?php
 #drop tcp $EXTERNAL_NET any -> $HOME_NET 9000:9002 (msg:"POLICY HP JetDirect LCD modification attempt";
//  if (isset($_POST['manual'])) {
    // $m = $_POST["manual"];
    
    $m = (" #drop tcp $EXTERNAL_NET any -> $HOME_NET 9000:9002 (msg:'POLICY HP JetDirect LCD modification attempt'; ");

    echo $m;
    // $manual = (String)$m;
    // //$manual = str_replace("\\\"", "\"", $m);
    // //echo $ssh->exec("echo raspberry | sudo python add_rule.py " .addslash($manual)." \n");
    // echo $manual;



?>