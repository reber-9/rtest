<?php
/*
code by reber
email:1070018473@qq.com
*/
    //?id=<img src=x onerror=alert(1)>
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $id = preg_replace('/\'/', '', $id);
        $id = preg_replace('/"/', '', $id);
        echo "<center><h2>id=".$id.'</h2></center>';
    } else {
        echo "please input id.";
    }
?>