<?php
    //code by reber <1070018473@qq.com>
    if (isset($_GET['code'])) {
        $data = $GET_['code'];
        // echo $data;
        preg_replace('/<code>(.*)<\/code>/e','$ret = "\\1"',$code);
        echo $ret;
    } else {
        echo 'please input code.';
    }
?>