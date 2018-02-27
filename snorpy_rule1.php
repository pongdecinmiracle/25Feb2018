<html>
    <title>Snorpy 2.0 - Web Based Snort Rule Creator</title>
    <link rel='stylesheet' href='./css/snorpy.css' type='text/css'></link>
    <link rel="stylesheet" href="./css/jquery-ui.css"></link>
    <meta charset="UTF-8">
    <meta name="description" content="Free web based snort rule creator, maker, with jquery">
    <meta name="keywords" content="web,based,snort,rule,creator,maker,builder">
    <meta name="author" content="Christopher Davis">

    <body>
    

    <?php

    /*

    Code Send to Raspberry Pi

    set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib/');
    include('Net/SSH2.php');
    include('Crypt/RSA.php');
    $key = new Crypt_RSA();
    $ssh = new Net_SSH2('10.8.0.6',22);
    $key->loadKey(file_get_contents('pri4.pem'));
    if (!$ssh->login('pi', $key)) {
        exit('Login Failed');
      }
    */

//Add Rule
if (isset($_POST['manual'])) {
    $action = $_POST["action"];
    // $Xman2="echo raspberry | sudo python add_rule.py " ."'".$action."'"." \n";
    // echo $ssh->exec($Xman2);
    // echo $ssh->exec("echo raspberry | sudo systemctl restart snort \n");
    echo $action;

}

//Drop or Alert Rule
if (isset($_POST['type_action'])) {
    $action = $_POST["type_action"];
    $sid = $_POST["sid_edit"];
    // echo $ssh->exec("echo raspberry | sudo python3 drop_or_alert.py ".$sid." ".$action." \n");
    // echo $ssh->exec("echo raspberry | sudo systemctl restart snort \n");
    echo $action." ".$sid;
}

//used
if (isset($_POST['sid_use'])) {
    $action = $_POST["sid_use"]; 
    // echo $ssh->exec("echo raspberry | sudo python3 use_rule.py ".$action." \n");
    // echo $ssh->exec("echo raspberry | sudo systemctl restart snort \n");
    echo $action;
}

//Unused
if (isset($_POST['sid_unuse'])) {
    $action = $_POST["sid_unuse"]; 
    // echo $ssh->exec("echo raspberry | sudo python3 use_or_unuse.py ".$action." \n");
    // echo $ssh->exec("echo raspberry | sudo systemctl restart snort \n");
    echo $action;
}

//delete
if (isset($_POST['sid_delete'])) {
    $action = $_POST["sid_delete"];
    // echo $ssh->exec("echo raspberry | sudo python delete.py "."sid:".$action." \n");
    // echo $ssh->exec("echo raspberry | sudo systemctl restart snort \n");
    echo $action;
}



    if (isset($_POST['action'])) {
        $action = $_POST["action"];
        if (isset($_POST['protocol'])) {
            $protocol = $_POST["protocol"];
            if($protocol=='ip'){
                $sourceip = $_POST["sourceip"];
                $dstip = $_POST["dstip"];
                $sid = $_POST["sid"];
                $rev = $_POST["rev"];
                $headermessage = $_POST["headermessage"];
                $classtype = $_POST["classtype"];
                $priority = $_POST["priority"];
                $gid = $_POST["gid"];
                $a = String($action." ".$protocol." ".$sourceip." -> ".$dstip." ( msg:\"".$headermessage."\"; classtype:".$classtype."; "
        .$priority."; gid:".$gid."; sid:".$sid."; rev:".$rev."; )");
        echo $a;
            }elseif($protocol=='icmp'){
                $sourceip = $_POST["sourceip"];
                $dstip = $_POST["dstip"];
                $sid = $_POST["sid"];
                $rev = $_POST["rev"];
                $headermessage = $_POST["headermessage"];
                $classtype = $_POST["classtype"];
                $priority = $_POST["priority"];
                $gid = $_POST["gid"];
                echo $action." ".$protocol." ".$sourceip." -> ".$dstip." ( msg:\"".$headermessage."\"; classtype:".$classtype."; "
        .$priority."; gid:".$gid."; sid:".$sid."; rev:".$rev."; )";
            }elseif($protocol=='tcp'){
                $sourceip = $_POST["sourceip"];
                $srcport = $_POST["srcport"];
                $dstip = $_POST["dstip"];
                $dstport = $_POST["dstport"];
                $sid = $_POST["sid"];
                $rev = $_POST["rev"];
                $headermessage = $_POST["headermessage"];
                $classtype = $_POST["classtype"];
                $priority = $_POST["priority"];
                $gid = $_POST["gid"];
                echo $action." ".$protocol." ".$sourceip." ".$srcport." "." -> ".$dstip." ".$dstport." ( msg:\"".$headermessage."\"; classtype:".$classtype."; "
        .$priority."; gid:".$gid."; sid:".$sid."; rev:".$rev."; )";
            }elseif($protocol=='udp'){
                $sourceip = $_POST["sourceip"];
                $srcport = $_POST["srcport"];
                $dstip = $_POST["dstip"];
                $dstport = $_POST["dstport"];
                $sid = $_POST["sid"];
                $rev = $_POST["rev"];
                $headermessage = $_POST["headermessage"];
                $classtype = $_POST["classtype"];
                $priority = $_POST["priority"];
                $gid = $_POST["gid"];
                echo $action." ".$protocol." ".$sourceip." ".$srcport." "." -> ".$dstip." ".$dstport." ( msg:\"".$headermessage."\"; classtype:".$classtype."; "
        .$priority."; gid:".$gid."; sid:".$sid."; rev:".$rev."; )";
            }else{

            }
        }else{
            
        }
    }

    ?>
    <br><br><br>
            <button onclick="back()">Back</button>

</body>
    <script src="./js/particles.js"></script>
    <script src="./js/part.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery-ui.js"></script>
    <script src="./js/snorpy.js"></script>

    <script>
        

        

        function back(){
            window.location.href= 'add_rule1.php'
        }

        

    </script>

</html>