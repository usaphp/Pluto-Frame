<?php
// Set color for theme preview
if(isset($_GET['color'])){
  if(session_id() == '') session_start();
  $_SESSION['color_scheme'] = $_GET['color'];
}
if(isset($_GET['menu'])){
  if(session_id() == '') session_start();
  $_SESSION['menu_position'] = $_GET['menu'];
}
if(isset($_GET['menu_style'])){
  if(session_id() == '') session_start();
  $_SESSION['menu_style'] = $_GET['menu_style'];
}
if(isset($_GET['navigation_type'])){
  if(session_id() == '') session_start();
  $_SESSION['navigation_type'] = $_GET['navigation_type'];
}
if(isset($_GET['show_sidebar_on_masonry'])){
  if(session_id() == '') session_start();
  $_SESSION['show_sidebar_on_masonry'] = $_GET['show_sidebar_on_masonry'];
}
if(isset($_GET['use_fixed_height_index_posts'])){
  if(session_id() == '') session_start();
  $_SESSION['use_fixed_height_index_posts'] = $_GET['use_fixed_height_index_posts'];
}
if(isset($_GET['show_featured_posts'])){
  if(session_id() == '') session_start();
  $_SESSION['show_featured_posts_on_index'] = $_GET['show_featured_posts'];
}
if(isset($_GET['no_frame'])){
  header("Location: /");
}else{
  header("Location: /frame/frame.php");
}