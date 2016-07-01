<?php
include_once 'lib/config.php';
?>

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

    <!-- https://shadowsocks.org -->
    <script type="text/javascript">//<![CDATA[
      window.__CF = window.__CF || {};
      window.__CF.AJS = {
        "cdnjs": {
          "__h": "1",
          "cdnjs": "MO,CS"
        },
        "abetterbrowser": {
          "ie": "6"
        }
      };
      //]]>
      </script>
    <script type="text/javascript" src="./asset/shadowsocks.org/js/appsh.min.js"></script>
    <script type="text/javascript">__CF.AJS.inith();</script>
    <link rel="stylesheet" href="./asset/shadowsocks.org/css/app.css">
    <!--[if lt IE 9]>
      <script src="/assets/js/html5.js"></script>
    <![endif]-->
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo"><?php echo $site_name; ?></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">首页</a></li>
            <li><a href="download.php">客户端下载</a></li>
            <li><a href="code.php">邀请码</a></li>
            <li><a href="user">用户中心</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="index.php">首页</a></li>
            <li><a href="download.php">客户端下载</a></li>
            <li><a href="code.php">邀请码</a></li>
            <li><a href="user">用户中心</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>



<!-- Begin page content -->
<div class="section no-pad-bot" id="index-banner">
<div class="container0">
    <div class="container0 clearfix">
        <div class="page-columns">
          <div id="markdown" class="sixteen columns bottom">
            <div id="download" class="container0">
              <div class="sixteen columns">
                <br></div>
              <div class="one-third column">
                <h3 align="top|left">
                <img src="./asset/shadowsocks.org/img/windows_60.png">&nbsp; Windows</h3>
                <p>
                  <strong>GUI Client</strong></p>
                <ul>
                  <li>shadowsocks-win:
                    <ul>
                      <li>Windows 7 or above:
                        <a href="https://github.com/shadowsocks/shadowsocks-csharp/releases/download/2.5.6/Shadowsocks-win-2.5.6.zip">2.5.6.zip</a></li>
                    </ul>
                  </li>
                  <li>Shadowsocks-Qt5:
                    <ul>
                      <li>
                        <a href="https://github.com/shadowsocks/shadowsocks-qt5/releases">Latest release</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="one-third column">
                <h3>
                  <img src="./asset/shadowsocks.org/img/mac_60.png">&nbsp; Mac OS X</h3>
                <p>
                  <strong>GUI Client</strong></p>
                <ul>
                  <li>ShadowsocksX:
                    <a href="https://github.com/shadowsocks/shadowsocks-iOS/releases/download/2.6.3/ShadowsocksX-2.6.3.dmg">2.6.3.dmg</a></li>
                  <li>GoAgentX:
                    <a href="https://goagentx.googlecode.com/files/GoAgentX-v2.2.9.dmg">v2.2.9.dmg</a></li>
                </ul>
                <p>
                  <strong>Command-line Client</strong></p>
                <ul>
                  <li>
                    <code>brew install shadowsocks-libev</code></li>
                </ul>
              </div>
              <div class="one-third column">
                <h3>
                  <img src="./asset/shadowsocks.org/img/linux_60.png">&nbsp; Linux</h3>
                <p>
                  <strong>GUI Client</strong></p>
                <ul>
                  <li>Shadowsocks-Qt5:
                    <ul>
                      <li>
                        <a href="https://github.com/shadowsocks/shadowsocks-qt5/wiki/Installation">Latest release</a></li>
                    </ul>
                  </li>
                </ul>
                <p>
                  <strong>Command-line Client</strong></p>
                <ul>
                  <li>shadowsocks-python:
                    <ul>
                      <li>
                        <code>pip install shadowsocks</code></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <p class="sixteen columns"></p>
              <div class="one-third column last">
                <h3>
                  <img src="./asset/shadowsocks.org/img/android_60.png">&nbsp; Android</h3>
                <ul>
                  <li>shadowsocks-android:
                    <ul>
                      <li>
                        <a href="https://play.google.com/store/apps/details?id=com.github.shadowsocks">Google Play</a>(
                        <a href="https://play.google.com/apps/testing/com.github.shadowsocks">beta</a>)</li></ul>
                  </li>
                </ul>
              </div>
              <div class="one-third column last">
                <h3>
                  <img src="./asset/shadowsocks.org/img/mac_60.png">&nbsp; iOS</h3>
                <ul>
                  <li>Potatso:
                    <ul>
                      <li>
                        <a href="https://itunes.apple.com/us/app/id1070901416">App Store</a></li>
                    </ul>
                  </li>
                  <li>MobileShadowSocks:
                    <ul>
                      <li>
                        <a href="http://apt.thebigboss.org/onepackage.php?bundleid=com.linusyang.shadowsocks">Big Boss</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="one-third column last">
                <h3>
                  <img src="./asset/shadowsocks.org/img/openwrt_60.png">&nbsp; OpenWRT</h3>
                <ul>
                  <li>shadowsocks-libev</li>
                  <ul>
                    <li>
                      <code>opkg install shadowsocks-libev</code></li>
                  </ul>
                  <li>shadowsocks-libev-polarssl</li>
                  <ul>
                    <li>
                      <code>opkg install shadowsocks-libev-polarssl</code></li>
                  </ul>
                </ul>
              </div>
            </div>
            </div>
        </div>
      </div>
</div>


<!-- www.shadowsocks.org -->
<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=73806ac11c/apps1.min.js"></script>
<script type="text/javascript">__CF.AJS.init1();</script>
<script src="./asset/shadowsocks.org/js/app.js"></script>
<script src="./asset/shadowsocks.org/js/analytics.js"></script>
<!-- www.shadowsocks.org end -->


<?php  include_once 'ana.php';
include_once 'footer.php';?>
