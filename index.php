<?php
    $mp3_files = (glob('songs/*.mp3'));
    $txt_files = (glob('songs/*.txt'));
    $m3u_files = (glob('songs/*.m3u'));


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Music Viewer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <link href="viewer.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="header">

    <h1>190M Music Playlist Viewer</h1>
    <h2>Search Through Your Playlists and Music</h2>
</div>


<div id="listarea">
    <ul id="musiclist">
        <?php foreach ($mp3_files as $item) { ?>
            <li class="mp3item">
                <a href="<?php echo $item; ?>"> <?php echo basename($item); ?> </a>
                <?php echo '( ' . filesize($item) . 'b )'; ?>
            </li>
        <?php } ?>
        <?php foreach ($txt_files as $item) { ?>
            <li class="mp3item">
                <a href="music.php?playlist=<?php echo $item; ?>"> <?php echo basename($item); ?> </a>
                <?php echo '( ' . filesize($item) . 'b )'; ?>
            </li>
        <?php } ?>
        <?php foreach ($m3u_files as $item) { ?>
            <li class="mp3item">
                <a href="music.php?playlist=<?php echo $item; ?>"> <?php echo basename($item); ?> </a>
                <?php echo '( ' . filesize($item) . 'b )'; ?>
            </li>
        <?php } ?>
    </ul>
</div>
</body>
</html>