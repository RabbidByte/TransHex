<html>
<head><title>TransHex by EssentialExploit.com</title></head>
<body>

<h1>TransHex Web Server</h1>
<p><h3>Progress</h3></p>
<?php

$url = $_GET["urlinput"];
$filename = $url;


$filename = explode("/", $filename);
$filename = end($filename);
$filenameandpath = "hex/" . $filename;
$TXTFILE = explode(".", $filename);
$TXTFILE = $TXTFILE[0];
$TXTFILE = $TXTFILE . ".txt";
$TXTFILEandpath = "hex/" . $TXTFILE;

//$DelFilePath = $setup["serverWebrootPath"] . $filenameandpath;
if (file_exists($filenameandpath)) { unlink ($filenameandpath); }
if (file_exists($TXTFILEandpath)) { unlink ($TXTFILEandpath); }

echo "The file " . $url . " is being downloaded. <br>";
file_put_contents($filenameandpath, file_get_contents($url));
echo "The file " . $filename . " has been downloaded. <br>Starting to convert to hex.<br>";

$execString = "python TransHex_BIN_to_TXT.py " . $filenameandpath . " hex/" . $TXTFILE;
$output = shell_exec($execString);
print "All Done ... I hope."

?>

<p><form action="/"><input type="submit" value="Continue ..."></form></p>

</body>
</html>