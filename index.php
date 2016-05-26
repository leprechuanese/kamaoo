<html>
<title>www.ircprize.tk - IRC Debian prizes <?php $date_raw=date('Y-m-d'); print('for: ' . date('Y-m-d', strtotime('-1 day', strtotime($date_raw)))); ?></title>
<body>
<?php
function human_filesize($bytes, $decimals = 2) {
  $sz = 'BKMGTP';
  $factor = floor((strlen($bytes) - 1) / 3);
  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
}

echo "<h1>Debian Prizes</h1><h3>irc.freenode.net</h3> <h2>channels:</h2>
<i>#debian, #debian-es, #debian-offtopic and #debian-es-offtopic</i><br><br>";

$dirFiles = array();
// opens images folder
if ($handle = opendir('/home/deb/kamaoo/logs')) {
    while (false !== ($file = readdir($handle))) {

        // strips files extensions      
        $crap   = array(".tar.gz", ".jpp", ".jpeg", ".JPG", ".JPEG", ".png", ".PNG", ".gif", ".GIF", ".bmp", ".BMP", "_", "-");    

        $newstring = str_replace($crap, " ", $file );   

        if ($file != "." && $file != ".." && $file != "index.php" && $file != "Thumbnails") {
                $dirFiles[] = $file;
        }
    }
    closedir($handle);
}

sort($dirFiles);
foreach($dirFiles as $file)
{
    $fisize=filesize("/home/deb/kamaoo/logs/$file");
    echo "<a href=\"logs/$file\" title=\"$fisize\">$file</a> (" . human_filesize($fisize) .")<br>\n";
}
?>
</body>
</html>

