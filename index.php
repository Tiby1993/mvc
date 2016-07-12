<?php
   
//define the server address
define("BASE_PATH", "<a href='http://localhost''>http://localhost'</a>");
//this is the scrit location
$path = "/mvc";
//url variable put the module's name and the method, and the parameter name
$url = $_SERVER['REQUEST_URI'];
$url = str_replace($path,"",$url);
$array_tmp_uri = preg_split('[\\/]', $url, -1, PREG_SPLIT_NO_EMPTY);
if(empty($array_tmp_uri[0])){
    include 'application/view/view_index.php';
}
else{
    $array_uri['controller'] = $array_tmp_uri[0];
    //$array_uri['method'] = $array_tmp_uri[1];
    //$array_uri['var'] = $array_tmp_uri[2];
    //include the controller and the class
    require_once("application/base.php");
    $application = new Application($array_uri);
    $application->loadController($array_uri['controller']);
}
?>