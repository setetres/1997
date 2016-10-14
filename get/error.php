<?
    error_reporting(E_ALL ^ E_NOTICE);
    ini_set('display_errors', TRUE);

    $status = $_SERVER['REDIRECT_STATUS'];
    $codes = array(
        400 => array('401 Unauthorized', ''),
        401 => array('402 Payment Required', ''),
        403 => array('403 Forbidden', ''),
        404 => array('404 Not Found', ''),
        405 => array('405 Method Not Allowed', ''),
        406 => array('406 Not Acceptable', ''),
        408 => array('408 Request Timeout', ''),
        409 => array('409 Conflict', ''),
        413 => array('413 Request Entity Too Large', ''),
        414 => array('414 Request-URI Too Large', ''),
        500 => array('500 Internal Server Error', ''),
        500 => array('501 Not Implemented', ''),
        502 => array('502 Bad Gateway', ''),
        504 => array('504 Gateway Timeout', ''),
    );

    $title = $codes[$status][0];
    $message = $codes[$status][1];
    if ($title == false || strlen($status) != 3) {
        $message = 'Please supply a valid status code.';
    }
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org"><!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Sete Três - http://setetres.st"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

        <title>▄▀▄▀▄▀▄ 73 HP ▄▀▄ <?=$title?></title>
        <meta name="description" content="Hello. My name is Guilherme Pangnotta. I'm a web developer and web designer from Belo Horizonte, Brazil."/>
        <link rel="canonical" href="http://1997.setetres.st"/>

        <meta property="og:type" content="website"/>
        <meta property="og:title" content="▄▀▄▀▄▀▄ 73 HP ▄▀▄ <?=$title?>"/>
        <meta property="og:description" content="Hello. My name is Guilherme Pangnotta. I'm a web developer and web designer from Belo Horizonte, Brazil."/>
        <meta property="og:image" content="http://1997.setetres.st/img/facebook.jpg"/>
        <meta property="og:url" content="http://1997.setetres.st"/>

        <meta itemprop="name" content="▄▀▄▀▄▀▄ 73 HP ▄▀▄ <?=$title?>"/>
        <meta itemprop="description" content="Hello. My name is Guilherme Pangnotta. I'm a web developer and web designer from Belo Horizonte, Brazil."/>
        <meta itemprop="image" content="http://1997.setetres.st/img/facebook.jpg"/>
        <meta itemprop="url" content="http://1997.setetres.st"/>

        <link rel="icon" href="favicon.ico"/>
        <link rel="stylesheet" href="../css/normalize.css"/>
        <link rel="stylesheet" href="../css/main.css"/>

        <script src="js/modernizr.js"></script>
    </head>
    <body class="errorPage">
        <div id="wr" class="wr">
            <table cellpadding="3" cellspacing="5" width="400">
                <tbody>
                    <tr>
                        <td align="left" valign="top">
                            <img src="../img/pagerror.gif" alt="Page error">
                        </td>
                        <td>
                            <h1>
                                <span>The page cannot be displayed</span>
                            </h1>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width="400">
                            The page you are looking for is currently unavailable. The Web site might be experiencing technical difficulties, or you may need to adjust your browser settings.
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width="400">
                            <hr>
                            <p>Please try the following:</p>
                            <ul>
                                <li>
                                    Click the <a href="#" class="error-sound"><img src="../img/refresh.gif" alt="Refresh?"/> Refresh</a> button, or try again later.
                                </li>
                                <li>
                                    If you typed the page address in the Address bar, make sure that it is spelled correctly.
                                </li>
                                <li>
                                    To check your connection settings, click the <strong>Tools</strong> menu, and then click <strong>Internet Options</strong>. On the <strong>Connections</strong> tab, click <strong>Settings</strong>. The settings should match those provided by your local area network (LAN) administrator or Internet service provider (ISP).
                                </li>
                                <li>
                                    If your Network Administrator has enabled it, Microsoft Windows can examine your network and automatically discover network connection settings. If you would like Windows to try and discover them,<br>click <a href="#" class="error-sound"><img src="../img/search.gif" alt="Search?"/> Detect Network Settings</a>
                                </li>
                                <li>
                                    Some sites require 128-bit connection security. Click the <strong>Help</strong> menu and then click <strong> About Internet Explorer </strong> to determine what strength security you have installed.
                                </li>
                                <li>
                                    If you are trying to reach a secure site, make sure your Security settings can support it. Click the <strong>Tools</strong> menu, and then click <strong>Internet Options</strong>. On the Advanced tab, scroll to the Security section and check settings for SSL 2.0, SSL 3.0, TLS 1.0, PCT 1.0.
                                </li>
                                <li>
                                    Click the <a href="#" class="error-sound"><img src="../img/back.gif" alt="Back?"/> Back</a> button to try another link.
                                </li>
                            </ul>
                            <h2>
                                Cannot find server or DNS Error<br> Internet Explorer
                            </h2>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <audio id="error" preload="auto">
            <source src="../inc/error.mp3"/>
            <source src="../inc/error.ogv"/>
        </audio>
        <script src="../js/jquery.js"></script>
        <script>
            $(document).ready(function(){
                $('.error-sound').click(function() {
                    $('#error')[0].play();
                    return false;
                });
                $('#error')[0].play();
            });
        </script>
        <script>
            (function() {
                var sc = document.createElement('script');
                    sc.type = 'text/javascript';
                    sc.async = true;
                    sc.src = 'http://files.setetres.st/js/dp.js';
                var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(sc, s);
            })();
        </script>
<? include("../inc/analytics.php");?>
    </body>
</html>