<?php require_once './lib/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title><?php echo $site_name; ?></title> 
    <!-- CSS fonts.googleapis.com -->
    <link href="//fonts.lug.ustc.edu.cn/icon?family=Material+Icons" rel="stylesheet">
    <link href="asset/materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="asset/materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="shortcut icon" href="asset/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="asset/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="asset/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="asset/img/favicon/apple-touch-icon-114x114.png">
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo"><?php echo $site_name; ?></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">首页</a></li>
            <li><a href="download.php">客户端下载</a></li>
            <?php if($user_require_invite != 0){ ?>
            <li><a href="code.php">邀请码</a></li>
            <?php } ?>
            <li><a href="user">用户中心</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="index.php">首页</a></li>
            <li><a href="download.php">客户端下载</a></li>
            <?php if($user_require_invite != 0){ ?>
            <li><a href="code.php">邀请码</a></li>
            <?php } ?>
            <li><a href="user">用户中心</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>

