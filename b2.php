

<?php



echo 'b.php该文件位于 " '  . __FILE__ . 


' " ';


/*

/storage/emulated/0/nginx/b.php


*/




include '/data/data/com.termux/files/home/vendor/a.php';


/*  ✘

错误的写法，注意路径之间不能空格换行

include '/data/data/com.termux/files
        //注意路径之间不能空格换行

/home/vendor/a.php';

空格换行，会报错


*/


include 'c.php';


include "/storage/emulated/0/nginx/cc.php";



include '/data/data/com.termux/files/home/bao.php';




?>










