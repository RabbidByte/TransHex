<html>
<head><title>TransHex by EssentialExploit.com</title></head>
<body>

<h1>TransHex Web Server</h1>
<p><h3>Download New File To Hex</h3></p>
<p><form action="getfile.php">
Enter URL of the Binary: <input type="text" name="urlinput" value="http://">&nbsp;&nbsp;<input type="submit" value="Go Get It!">
</form></p>

<p><h3>Browse and Download Hex Files</h3></p>
<p>
<?php
if ($handle = opendir('hex/')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'txt')
        {
            $thelist .= '<li><a href="hex/'.$file.'">'.$file.'</a></li>';
        }
    }
    closedir($handle);
}
?>
<ul>
<?=$thelist?>
</ul>
</p>

<p><form action="/"><input type="submit" value="Refresh Page"></form></p>

</body>
</html>
