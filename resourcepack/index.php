<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="../style.css" rel="stylesheet">
    <link href="../dark.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <title>Hobbitcraft | Resource Packs</title>

    <link rel="apple-touch-icon" sizes="180x180" href="../img/ic/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/ic/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../img/ic/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/ic/favicon-16x16.png">
    <link rel="manifest" href="../img/ic/site.webmanifest">
    <link rel="mask-icon" href="../img/ic/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="../img/ic/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="../img/ic/browserconfig.xml">
    <meta name="theme-color" content="#cd7b3a">
    <meta name="keywords" content="minecraft, smp, hobbitcraft, whitelisted, server, hermitcraft" />

    <meta property="og:type" content="Hobbitcraft">
    <meta property="og:title" content="Hobbitcraft Resource Pack" />
    <meta property="og:description" content="The place where you can download some of the more recent resourcepacks." />
    <meta property="og:url" content="https://www.hobbitcraft.cc" />
    <meta property="og:image" content="https://hobbitcraft.cc/img/ic/navicon.png" />
    
</head>

<body>
    <div class="container-fluid HC-background">
        <div class="container text-center">
            <img class="HC-title"
                src="../img/ic/hctitle.webp">
        </div>
    </div>
 <!--Navigation bar-->
<div id="navbar">
</div>
<script>
$(function(){
  $("#navbar").load("../navbar/navbar.html");
});
</script>
<!--end of Navigation bar-->
    <?php
  if ($handle = opendir('.')) {
    $ignore_files = array('.', '..', '.htaccess', '.htpsswd', 'index.php');
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") 
        if (!in_array($file, $ignore_files)) {
            $thelist .= '<li><a href="'.$file.'">'.$file.'</a></li>';
        }
        }
        closedir($handle);
    }
    ?>
<h1>List of Resourcepacks:</h1>

<ul><?php echo $thelist; ?></ul>
</body>

<br>
<br>

</html>
