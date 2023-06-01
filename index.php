<?php
include_once('public/__pages__/__main__.php');
include_once($path.'public/__server__/__ShowPost__.php');




function __ROUTE__($page) {
  $path = 'public/__pages__/';
  include_once($path.'__styles__.php');
  include_once($path.'__top-bar__.php');
  include_once($path.'__side-bar__.php');
  include_once($path.$page);
  include_once($path.'__footer__.php');
}
$request = $_SERVER['REQUEST_URI'];
$action = $_GET['action'];
$post_list = $_GET['post_list'];
$post_category = $_GET['category'];
$post_id = $_GET['post'];

if (isset($post_id, $post_category)) {
  // code...
  $path = 'public/__pages__/';
  include_once($path.'__styles__.php');
  include_once($path.'__top-bar__.php');
  include_once($path.'__side-bar__.php');
  __SHOW__($post_id, $post_category);
  include_once($path.'__footer__.php');
  // __ROUTE__('__main__.php');
}
if (isset($post_list)) {
  $path = 'public/__pages__/';
  include_once($path.'__styles__.php');
  include_once($path.'__top-bar__.php');
  include_once($path.'__side-bar__.php');
  __ShowPost__($post_list);
  include_once($path.'__footer__.php');
}

if ($request == "/__BLOG__/") {
  __ROUTE__('__blog-list__.php');
} else if ($action == '__about-us__') {
  __ROUTE__($action.'.php');
} else if ($action == '__contact-us__') {
  __ROUTE__($action.'.php');
} else if ($action == '__profile__') {
  __ROUTE__($action.'.php');
} else if ($action == '__internet__') {
  __ROUTE__($action.'.php');
} else if ($action == '__web-world__') {
  __ROUTE__($action.'.php');
} else if ($action == '__cyber-security__') {
  __ROUTE__($action.'.php');
} else if ($action == '__programming__') {
  __ROUTE__($action.'.php');
} else if ($action == '__technology__') {
  __ROUTE__($action.'.php');
} else if ($action == '__write_post__') {
  __ROUTE__($action.'.php');
} else if ($action == '__login__') {
  __ROUTE__($action.'.php');
}


?>