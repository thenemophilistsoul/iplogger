
<?php
$ip = $_SERVER['REMOTE_ADDR
$date = date("l d F H:i:s");
$browser = $_SERVER['HTTP_USER_AGENT'];
$fp = fopen("ips.txt", "a");
fputs($fp, "IP: $ip\n  Date: $date\n    User Agent: $browser\n\n\n");
fclose($fp);

?>
<!DOCTYPE HTML>
<html>
        <head>
                <meta charset="utf-8" />
                <title>Houdini.pw - Home</title>
        </head>
        <body>
                <h1>Hello</h1>
                <p><strong>Your IP has been logged!</strong></p>
        </body>
</html>
