<?php
require('__database__/__DB__.php');
$__DB__ = new __database__();

$sql = "CREATE TABLE web_world (
post_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
post_title TEXT(300) NULL,
post_content TEXT(300) NULL,
poster VARCHAR(50),
date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$tbl = $__DB__->__CreateTable__($sql);


//echo $tbl;
?>