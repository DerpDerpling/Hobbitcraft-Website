<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="../style.css" rel="stylesheet">
    <link href="../dark.css" rel="stylesheet">
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
                src="../img/ic/hctitle.png">
        </div>
    </div>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="link" href="https://hobbitcraft.cc"><img src="../img/ic/navicon.png" height="48" width="48"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.hobbitcraft.cc">🏠Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://map.hobbitcraft.cc">🗺️Dynmap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../shops">🛒Shops</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../rules">📘Rules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../files">🗃️Files</a>
                    </li>
                    
                    <div class="dropdown-divider"></div>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <a class="nav-link" href="apply">
                        <img src="../img/ic/apply.svg" alt="Apply Icon" style="height:20px;"
                            class="d-inline-block align-text-center"> Apply
                    </a>
                    <a class="nav-link" href="donate"> ⭐Donate
                    </a>
                    <a class="nav-link" href="logoarchive">
                        <img src="../img/ic/hc632.png" alt="Logo Archive Icon" style="height:20px;"
                            class="d-inline-block align-text-center"> Logo Archive
                    </li>
                    <a class="nav-link" href="https://github.com/DerpDerpling/Hobbitcraft-Website">
                        <img src="https://cdn.discordapp.com/attachments/922022247164682250/922207556296925225/25231.png"
                            alt="Github Logo" style="height:20px;" class="d-inline-block align-text-center"> Source
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://discord.gg/S5PsRp9c9Q"><img
                                src="https://cdn.discordapp.com/attachments/922022247164682250/922023651400900648/image_2021-12-19_021153.png"
                                alt="Discord Logo" style="height:20px;" class="d-inline-block align-text-center"> Join
                            our Discord!</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
