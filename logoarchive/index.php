<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="../style.css" rel="stylesheet">
    <link href="../dark.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="../img/ic/apple-touch-icon.png?v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/ic/favicon-32x32.png?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/ic/favicon-16x16.png?v=2">
    <link rel="manifest" href="../img/ic/site.webmanifest?v=2">
    <link rel="mask-icon" href="../img/ic/safari-pinned-tab.svg?v=2" color="#5bbad5">
    <link rel="shortcut icon" href="../img/ic/favicon.ico?v=2">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="../img/ic/browserconfig.xml?v=2">
    <meta name="theme-color" content="#3EC7F4">
    <meta name="keywords" content="minecraft, smp, hobbitcraft, whitelisted, server, hermitcraft, apply, application" />

    <title>Hobbitcraft | Logo Archive</title>
    <meta property="og:type" content="Hobbitcraft">
    <meta property="og:title" content="Hobbitcraft Logo Archive" />
    <meta property="og:description" content="The place where all the logos are archived" />
    <meta property="og:url" content="https://www.hobbitcraft.cc" />
    <meta property="og:image" content="https://hobbitcraft.cc/img/ic/navicon.png" />
</head>

<body>
    <body>
        <div class="container-fluid HC-background">
            <div class="container text-center">
                <img class="HC-title" src="../img/logoarchive.webp">
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
    <center>
        <br>
<h1>Hobbitcraft Logo Archive</h1> <hr>

<h3>Welcome to the Logo Archive, where all the logos that are related to hobbitcraft get archived.</h3>
</center>
<div class=container>
<?php
    $files = scandir('img/');
    foreach($files as $file) {
        if($file !== "." && $file !== "..") {
            echo "<a href='img/$file'><img width='30%' loading='lazy' vertical-align:middle src='img/$file'/></a>";
        }
    }
?>
</div>
</body>

<br>
<br>

</html>
