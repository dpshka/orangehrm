<?php 
$rootPath = realpath(dirname(__FILE__)."/../../../../");

if (@include_once $rootPath."/lib/confs/sysConf.php") {
    $conf = new sysConf();
    $version = $conf->getVersion();
}
$prodName = 'OrangeHRM';
$copyrightYear = date('Y');

?>

&copy; 2021 <a href="https://www.prudential.com.hk" target="_blank">Prudential (Hong Kong) Limited</a>. All rights reserved.
