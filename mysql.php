<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    
    echo $server;
    echo "<br />";
    echo $username;
    echo "<br />";
    echo $password;
    echo "<br />";
    echo $db;
    echo "<br />";
    echo $url;
    echo "<br />";
    echo json_encode($url);
    echo "<hr />";
?>