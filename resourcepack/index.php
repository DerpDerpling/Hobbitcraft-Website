
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

    <link rel="apple-touch-icon" sizes="180x180" href="../img/ic/apple-touch-icon.png?v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/ic/favicon-32x32.png?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/ic/favicon-16x16.png?v=2">
    <link rel="manifest" href="../img/ic/site.webmanifest?v=2">
    <link rel="mask-icon" href="../img/ic/safari-pinned-tab.svg?v=2" color="#5bbad5">
    <link rel="shortcut icon" href="../img/ic/favicon.ico?v=2">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="../img/ic/browserconfig.xml?v=2">
    <meta name="theme-color" content="#3EC7F4">
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
    		<img class="HC-title" style="width:40rem" src="../hctitle.webp">
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
        <div style="justify-content: center; display:flex;">
        	<h1>List of Resourcepacks:</h1>
        </div>

        <ul class="resource-list"><?php echo $thelist; ?></ul>
</body>
<style>
ul.resource-list {
    list-style-type: none;
    padding: 0;
    width: 30%;
    margin: 0 auto; /* Center the list on the page */
}

ul.resource-list li {
    margin: 10px 0;
    padding: 10px;
    background-color: #606c78;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    transition: background-color 0.3s ease;
}

ul.resource-list li a {
    text-decoration: none;
    color: #17a2b8;
    font-weight: bold;
}

ul.resource-list li:hover {
    background-color: #495057;
}

ul.resource-list li a:hover {
    color: #80deea;
}

</style>

<br>
<br>

</html>
